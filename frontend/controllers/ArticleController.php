<?php

namespace frontend\controllers;

use common\models\Article;
use common\models\ArticleAttachment;
use common\models\UserProfile;
use frontend\models\search\ArticleSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use frontend\models\ArticleIp;
use frontend\models\MyClick;
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

            $model = Article::find()->published()->andWhere(['id'=>$id])->one();
         if(empty($model)){
             return false;
         }
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
            $my_click->user_id = \Yii::$app->user->id;
            $my_click->article_id = $id;
            if(false == $my_click->save()){
                var_dump($model->getFirstErrors());
            };

            //计算绩效
            $vip = UserProfile::findOne(['user_id'=>$user_id]);
            $vip->updateCounters(['total_commission'=>+$model['commission']]);

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
