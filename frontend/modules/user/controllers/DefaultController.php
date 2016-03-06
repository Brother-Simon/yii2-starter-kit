<?php

namespace frontend\modules\user\controllers;

use common\base\MultiModel;
use frontend\modules\user\models\AccountForm;
use Intervention\Image\ImageManagerStatic;
use trntv\filekit\actions\DeleteAction;
use trntv\filekit\actions\UploadAction;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use backend\models\UserForm;
use common\models\User;
class DefaultController extends Controller
{
    public $layout = false;
    /**
     * @return array
     */
    public function actions()
    {
        return [
            'avatar-upload' => [
                'class' => UploadAction::className(),
                'deleteRoute' => 'avatar-delete',
                'on afterSave' => function ($event) {
                    /* @var $file \League\Flysystem\File */
                    $file = $event->file;
                    $img = ImageManagerStatic::make($file->read())->fit(215, 215);
                    $file->put($img->encode());
                }
            ],
            'avatar-delete' => [
                'class' => DeleteAction::className()
            ]
        ];
    }

    /**
     * @return array
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@']
                    ]
                ]
            ]
        ];
    }

    /**
     * @return string|\yii\web\Response
     */
    public function actionIndex()
    {
        $accountModel = new AccountForm();
        $accountModel->setUser(Yii::$app->user->identity);

        $model = new MultiModel([
            'models' => [
                'account' => $accountModel,
                'profile' => Yii::$app->user->identity->userProfile
            ]
        ]);

        return $this->render('index', ['model'=>$model]);
    }

    /**
     * @return string|\yii\web\Response
     */
    public function actionChangeProfile()
    {
//         $accountModel = new AccountForm();
//         $accountModel->setUser(Yii::$app->user->identity);

//         $model = new MultiModel([
//             'models' => [
//                 'account' => $accountModel,
//                 'profile' => Yii::$app->user->identity->userProfile
//             ]
//         ]);

//         if ($model->load(Yii::$app->request->post()) && $model->save()) {
//             Yii::$app->session->setFlash('alert', [
//                 'options' => ['class'=>'alert-success'],
//                 'body' => Yii::t('frontend', 'Your account has been successfully saved')
//             ]);
//             return $this->refresh();
//         }
//         return $this->render('change', ['model'=>$model]);
            $model = new UserForm();
            $model->setModel($this->findModel(\Yii::$app->user->id));
            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['index']);
            }

            return $this->render('change', [
                'model' => $model,
            ]);
    }
    /**
     * Finds the User model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return User the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    /**
     * Updates an existing User model.
     * @param integer $id
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new UserForm();
        $model->setScenario('create');
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        }

        return $this->render('create', [
            'model' => $model,
            'roles' => ArrayHelper::map(Yii::$app->authManager->getRoles(), 'name', 'name')
        ]);
    }
}
