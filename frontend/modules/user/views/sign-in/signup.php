<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $model \frontend\modules\user\models\SignupForm */

$this->title = Yii::t('frontend', '登录');
$this->params['breadcrumbs'][] = $this->title;
?>
<!doctype html>
<html lang="zh-cn">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
<meta content="yes" name="apple-mobile-web-app-capable" />
<meta content="black" name="apple-mobile-web-app-status-bar-style" />
<meta content="telephone=no" name="format-detection" />
<meta property="wb:webmaster" content="a4f355093baa17ab" />

<link rel="stylesheet" type="text/css" href="css/ak767.css" media="all" />

<title><?php echo Html::encode($this->title) ?></title>
</head>
<body>



<div class="site-signup">
    <h1><?php echo Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
                <?php echo $form->field($model, 'username') ?>
                <?php echo $form->field($model, 'email') ?>
                <?php echo $form->field($model, 'password')->passwordInput() ?>
                <div class="form-group">
                    <?php echo Html::submitButton(Yii::t('frontend', 'Signup'), ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>
                <h2><?php echo Yii::t('frontend', 'Sign up with')  ?>:</h2>
                <div class="form-group">
                    <?php echo yii\authclient\widgets\AuthChoice::widget([
                        'baseAuthUrl' => ['/user/sign-in/oauth']
                    ]) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>

<div class="login-wrap">
  <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
    <div class="m-login-ttlogo">
      <div class="yiche-logo"> </div>
      <p> 一个帐号，一部手机！ <em>动动手指，趟在家里就能赚钱</em> </p>
    </div>
    <div class="menu">
     
    </div>
    <div class="input-box">
      <div class="input-item"> <i class="yonghu"></i>
        <input   type="text" placeholder="手机/邮箱/用户名" class="three-character" value="" />
       	<?php echo $form->field($model, 'username') ?>
       </div>
      <div class="input-item"> <i class="mima"></i>
      
        <input type="password" placeholder="请输入您的密码" class="three-character" />
        </div>
     
    </div>
    
    <div id="divMsg" class="input-alert-bottom"> </div>
    
    <a id="btn_Login" href="首页.htm" class="btn-blue">登录<input  type="button" style="display:none;" /></a>
    <div class="bottom-info">
        <a target="_top" href="#" class="fl">忘记密码？</a>
        <a target="_top" href="注册.htm" class="fr">新用户注册</a>
    </div>
  
  <?php ActiveForm::end(); ?>
</div>
</body>
</html>


