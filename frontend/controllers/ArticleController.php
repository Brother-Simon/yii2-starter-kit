<?php

namespace frontend\controllers;

use common\models\Article;
use common\models\ArticleAttachment;
use frontend\models\search\ArticleSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use frontend\models\ArticleIp;
use frontent\models\MyClick;
use frontend\models\Vip;
/**
 * @author Eugene Terentev <eugene@terentev.net>
 */
class ArticleController extends Controller
{
    /**
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ArticleSearch();
        $dataProvider = $searchModel->search(\Yii::$app->request->queryParams);
        $dataProvider->sort = [
            'defaultOrder' => ['created_at' => SORT_DESC]
        ];
        return $this->render('index', ['dataProvider'=>$dataProvider]);
    }

    /**
     * @param $slug
     * @return string
     * @throws NotFoundHttpException
     */
    public function actionView($id,$user_id)
    {

         $vip = Vip::findOne(['id'=>2]);
         $vip->updateCounters(['total_commison'=>-10]);

         $model = Article::find()->published()->andWhere(['id'=>$id])->one();
//         if (!$model) {
//             throw new NotFoundHttpException;
//         }
        $article_ip = new ArticleIp();
        $ip = \Yii::$app->request->userIP;
        $article_ip->ip = $ip;
        $article_ip->article_id = $id;
        //如果为空则统计绩效
        if(empty($article_ip->findOne(['ip'=>$ip,'article_id'=>$id]))){
            //保存ip
            $article_ip->save();
            //记录我的点击
            $my_click = new MyClick();
            $my_click->user_id = "UID";
            $my_click->article_id = $id;
            $my_click->save();

            //计算绩效
            $vip = Vip::findOne(['id'=>2]);
            $vip->updateCounters(['total_commison'=>-$model['total_commison']]);

        }
        //我的点击统计

        $viewFile = $model->view ?: 'view';
        return $this->render('index', ['model'=>$model]);
    }

    public function actionAttachmentDownload($id)
    {
        $model = ArticleAttachment::findOne($id);
        if (!$model) {
            throw new NotFoundHttpException;
        }

        return \Yii::$app->response->sendStreamAsFile(
            \Yii::$app->fileStorage->getFilesystem()->readStream($model->path),
            $model->name
        );
    }
}
