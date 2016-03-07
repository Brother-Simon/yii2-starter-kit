<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Vip;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use frontend\models\UserCommission;

/**
 * VipController implements the CRUD actions for Vip model.
 */
class VipController extends Controller
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
        ];
    }

    public function beforeAction($action)
    {
        $this->layout = Yii::$app->user->isGuest || !Yii::$app->user->can('loginToBackend') ? 'base' : 'common';
        return parent::beforeAction($action);
    }

    /**
     * Lists all Vip models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Vip::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Lists all Vip models.
     * @return mixed
     */
    public function actionGetPay()
    {
        $user_profile = Yii::$app->user->getIdentity()->userProfile;
        $model = new UserCommission();
        if ($model->load(Yii::$app->request->post())) {
            $model->user_id = Yii::$app->user->id;
            if($model->save()){
                $user_profile->can_commission = $user_profile->can_commission - $model->commission;
                $user_profile->save();
                return $this->redirect(['vip/get-pay-success']);
            }else{
                return $this->render('get-pay', [
                    'model' => $model,
                    'total_commission' => $user_profile['total_commission']
                ]);
            }
        } else {
            return $this->render('get-pay', [
                'model' => $model,
                'total_commission' => $user_profile['total_commission']
            ]);
        }
    }

    /**
     * Lists all Vip models.
     * @return mixed
     */
    public function actionGetPaySuccess()
    {
        $user_profile = Yii::$app->user->getIdentity()->userProfile;
        $model = new UserCommission();

        return $this->render('get-pay-success', [
            'model' => $model,
            'total_commission' => $user_profile['total_commission']
        ]);
    }

    /**
     * Displays a single Vip model.
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
     * Displays a single Vip model.
     * @param integer $id
     * @return mixed
     */
    public function actionCommission()
    {

        die('提取佣金');
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }
    /**
     * Creates a new Vip model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new UserCommission();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Vip model.
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
     * Deletes an existing Vip model.
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
     * Finds the Vip model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Vip the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Vip::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
