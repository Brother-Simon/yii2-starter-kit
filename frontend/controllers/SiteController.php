<?php
namespace frontend\controllers;

use Yii;
use frontend\models\ContactForm;
use yii\web\Controller;
use yii\data\ArrayDataProvider;
use yii\db\Query;
use yii\web\User;
use frontend\models\Vip;
use common\models\Article;
use yii\data\ActiveDataProvider;
/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction'
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null
            ],
            'set-locale'=>[
                'class'=>'common\actions\SetLocaleAction',
                'locales'=>array_keys(Yii::$app->params['availableLocales'])
            ]
        ];
    }

    public function beforeAction($action)
    {
        $this->layout = Yii::$app->user->isGuest || !Yii::$app->user->can('loginToBackend') ? 'base' : 'common';
        return parent::beforeAction($action);
    }

    public function actionIndex()
    {
        $article = (new Query())->from('article')->all();
        $query = Article::find();

        $provide = new ActiveDataProvider([
            'query' => $query,
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
            'article' => $provide->getModels(),
            'pageCount' => $pagination->pageCount,
            'page' => $pagination->page,
            'links' => $pagination->getLinks()
        ]);
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($model->contact(Yii::$app->params['adminEmail'])) {
                Yii::$app->getSession()->setFlash('alert', [
                    'body'=>Yii::t('frontend', 'Thank you for contacting us. We will respond to you as soon as possible.'),
                    'options'=>['class'=>'alert-success']
                ]);
                return $this->refresh();
            } else {
                Yii::$app->getSession()->setFlash('alert', [
                    'body'=>\Yii::t('frontend', 'There was an error sending email.'),
                    'options'=>['class'=>'alert-danger']
                ]);
            }
        }

        return $this->render('contact', [
            'model' => $model
        ]);
    }
}
