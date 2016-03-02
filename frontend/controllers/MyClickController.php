<?php

namespace frontend\controllers;

use Yii;
use frontend\models\MyClick;
use frontend\models\search\MyClick as MyClickSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\VarDumper;
use yii\db\Expression;
use yii\behaviors\TimestampBehavior;
use yii\data\ActiveDataProvider;
use common\models\Article;
// 使用

/**
 * MyClickController implements the CRUD actions for MyClick model.
 */
class MyClickController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
            [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'published_at',
                'updatedAtAttribute' => 'update_time',
                'value' => new Expression('NOW()')
            ],
        ];
    }

    /**
     * Lists all MyClick models.
     * @return mixed
     */
    public function actionIndex()
    {
        $click_query = MyClick::findOne(['user_id'=>1])->select(['article_id']);
        $article_query = Article::find()->where($click_query);
        $provide = new ActiveDataProvider([
            'query' => $article_query,
            'pagination' => [
                'pageSize' => 1,
            ],
            'sort' => [
                'defaultOrder' => [
                    'created_at' => SORT_DESC,
                    'title' => 'simon'
                ]
            ]
        ]);
        $provide->prepare();
        $pagination = $provide->getPagination();
        return $this->render('index', [
            'data' => $provide->getModels(),
            'pageCount' => $pagination->pageCount,
            'page' => $pagination->page,
            'links' => $pagination->getLinks()
        ]);
    }

    /**
     * Displays a single MyClick model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new MyClick model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new MyClick();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing MyClick model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing MyClick model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the MyClick model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return MyClick the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = MyClick::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
