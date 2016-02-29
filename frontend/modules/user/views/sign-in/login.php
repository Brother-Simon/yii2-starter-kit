<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $model \frontend\modules\user\models\LoginForm */

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

<style>
@charset "utf-8";
html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video {
	margin:0;
	padding:0;
	border:0;
	font:inherit
}
html {
	font-size:62.5%
}
body {
	font-family:"STHeiti", Helvetica, Arial, sans-serif;
background: #F2F2F2!important;

}
table {
	border-collapse:collapse;
	border-spacing:0
}
fieldset, img {
	border:0
}
legend {
	display:none
}
address, caption, cite, code, dfn, em, strong, th, var {
	font-style:normal;
	font-weight:normal
}
ol, ul {
	list-style:none
}
caption, th {
	text-align:left
}
h1, h2, h3, h4, h5, h6 {
	font-size:100%;
	font-weight:normal
}
q:before, q:after {
	content:''
}
abbr, acronym {
	border:0
}
a {
	color:#297dcc;
	text-decoration:none
}
a:focus {
	color:#C00;
	outline:0
}
.clear {
	clear:both;
	height:0;
	overflow:hidden
}
ins {
	text-decoration:none
}
html {
	-webkit-text-size-adjust:none
}
input[type="text"], input[type="button"], input[type="submit"], input[type="search"], input[type="password"] {
	-webkit-appearance:none;
	border-radius:0
}
input[type="checkbox"] {
	margin:0 3px 3px 4px
}
img {
	max-width:100%
}
.f12 {
	font-size:1.2rem
}
.fl {
	float:left
}
.fr {
	float:right;
}
.fc {
	display:block;
	text-align:center;
}
.h1 {
	height:1px
}
.h120 {
	height:120px
}
.cGreen {
	color:#094!important
}
.section-log {
	width:100%
}
.section-warp {
	margin:10px auto 50px;
	padding:10px 10px 8px;
	overflow:hidden
}
.login-wrap {
	margin:10px auto 50px;
	overflow:hidden
}

header {
	height:44px;
	line-height:46px;
	background:#F6F6F6;
	border-bottom:1px solid #D9D9D9;
	overflow:hidden;
	position:relative;
	text-align:center;
	font-size:1.8rem
}
header .btn-return {
	height:20px;
	line-height:21px;
	background:url(/frontend/webiimg/login_btn_return.png) no-repeat;
	background-size:11px 20px;
	padding-left:16px;
	position:absolute;
	top:11px;
	left:10px;
	color:#666;
	font-size:1.6rem
}
.portrait {
	width:77px;
	height:77px;
	background:url(/frontend/web/img/login_ico_header.png) no-repeat;
	background-size:77px 77px;
	margin:29px auto 39px
}
.tt-txt {
	font-size:1.4rem;
	color:#1B1B1B;
	margin:20px 10px 15px
}
.tt-txt em {
	color:#336799
}
.input-box {
	font-size:1.5rem;
	padding:0 5px;
	background:#fff
}
.input-item {
	position:relative;
	border-bottom:1px solid #ececec;
	background:#fff;
	padding:9px 0
}
.input-item em {
	padding:0 7px
}
.input-box i {
	position:absolute;
	top:18px;
	left:6px;
	z-index:3;
	display:block;
	width:18px;
	height:20px;
	background:url(/frontend/web/img/icon_all.png) no-repeat 0 0;
	background-size:18px 450px
}
.input-box i.mima {
	background:url(/frontend/web/img/icon_all.png) no-repeat 0 -48px;
	background-size:18px 450px
}
.input-box i.shouji {
	background:url(/frontend/web/img/icon_all.png) no-repeat 0 -100px;
	background-size:18px 450px
}
.input-box i.yanzhenma {
	background:url(/frontend/web/img/icon_all.png) no-repeat 0 -152px;
	background-size:18px 450px
}
.input-box i.jiaoyanma {
	background:url(/frontend/web/img/icon_all.png) no-repeat 0 -205px;
	background-size:18px 450px
}
.input-box i.mail {
	background:url(/frontend/web/img/icon_all.png) no-repeat 0 -415px;
	background-size:18px 450px
}
.input-box span {
	position:absolute;
	top:17px;
	left:6px;
	z-index:3
}
.input-box strong {
	width:97px;
	height:27px;
	line-height:27px;
	color:#297dcc;
	border-left:1px solid #ececec;
	position:absolute;
	top:11px;
	right:0;
	z-index:3;
	display:block;
	cursor:pointer;
	padding:0 0 0 8px
}
.input-box strong:active {
	background:#F4F4F4
}
.input-box strong.gray {
	color:#ccc
}
.input-box strong.disabled, .input-box strong.disabled:active {
	background:#F6F6F6;
	color:#CCC
}
.input-box .check-code {
	width:52px;
	height:29px;
	position:absolute;
	top:10px;
	right:40px;
	z-index:3
}
.input-box .hide-password {
	width:40px;
	height:35px;
	background:url(/frontend/web/img/icon_all.png) no-repeat 10px -278px;
	background-size:18px 450px;
	position:absolute;
	top:3px;
	right:0;
	z-index:3
}
.input-box .show-password {
	width:40px;
	height:40px;
	background:url(/frontend/web/img/icon_all.png) no-repeat 10px -318px;
	background-size:18px 450px;
	position:absolute;
	top:3px;
	right:0;
	z-index:3
}
.input-box .refresh-code {
	width:40px;
	height:40px;
	background:url(/frontend/web/img/icon_all.png) no-repeat 10px -357px;
	background-size:18px 450px;
	position:absolute;
	top:3px;
	right:0;
	z-index:3
}
.input-box .btn-cancel {
	width:40px;
	height:30px;
	background:url(/frontend/web/img/icon_all.png) no-repeat 13px -237px;
	background-size:18px 450px;
	position:absolute;
	top:4px;
	right:0;
	z-index:3
}
.input-box .btn-cancel-password {
	right:30px
}
.input-box .btn-cancel-yanzhenma {
	right:90px
}
.input-box .btn-cancel-jiaoyanma {
	right:105px
}
.input-box input {
	height:30px;
	line-height:30px;
	border:0;
	font-size:1.5rem;
	border-radius:0;
	display:block;
	position:relative;
	z-index:1;
	color:#b7b7b7
}
.input-box input:focus {
	outline:none!important;
	border-color:#4490CE;
	z-index:2;
	color:#333
}
.input-box .two-character {
	padding-left:38px;
	width:285px
}
.input-box .three-character {
	padding-left:38px;
	width:285px
}
.input-box .five-character {
	padding-left:100px;
	width:194px
}
.input-alert-bottom {
	color:#DD4B39;
	font-size:1.2rem;
	padding:0 0 0 40px;
	overflow:hidden
}
.input-alert-middle {
	color:#DD4B39;
	font-size:1.2rem;
	padding:0 0 6px 40px;
	overflow:hidden
}
.input-alert-correct {
	color:#333;
	font-size:1.2rem;
	padding:2px 0 10px 60px;
	overflow:hidden;
	background:url(/frontend/web/img/pic_correct.png) no-repeat 30px 5px;
	background-size:15px 15px
}
.input-alert-password {
	color:#DD4B39;
	font-size:1.2rem;
	padding:0 0 6px 100px;
	overflow:hidden
}
.btn-blue {
	display:block;
	height:40px;
	line-height:40px;
	background:#297dcc;
	text-align:center;
	color:#FFF;
	margin:25px 10px 15px 10px;
	border-radius:3px;
	font-size:1.6rem
}
.btn-blue:hover, .btn-blue:active {
	background:#347CB7;
	color:#FFF
}
.bottom-info {
	font-size:1.2rem;
	overflow:hidden;
	color:#666;
	margin:0 10px
}
.fangshi {
	margin:0 auto;
	overflow:hidden;
	width:300px
}
.btn-seek {
	display:block;
	width:118px;
	height:118px;
	line-height:190px;
	border:1px solid #e5e5e5;
	border-radius:5px;
	background:#FFF;
	font-size:1.4rem;
	color:#1B1B1B;
	text-align:center;
	overflow:hidden;
	float:left;
	margin:90px 15px
}
.btn-seek-phone {
	background:#FFF url(/frontend/web/img/ico_phone.png) no-repeat center 20px;
	background-size:25px 48px
}
.btn-seek-mail {
	background:#FFF url(/frontend/web/img/ico_mail.png) no-repeat center 31px;
	background-size:39px 25px
}
.ico-yixiaoche-1 {
	background:url(/frontend/web/img/ico_yixiaoche_1.png) no-repeat
}
.ico-yixiaoche-2 {
	background:url(/frontend/web/img/ico_yixiaoche_2.png) no-repeat
}
.ico-yixiaoche-3 {
	background:url(/frontend/web/img/ico_yixiaoche_3.png) no-repeat
}
.ico-yixiaoche-4 {
	background:url(/frontend/web/img/ico_yixiaoche_4.png) no-repeat
}
.ico-yixiaoche-1, .ico-yixiaoche-2, .ico-yixiaoche-3, .ico-yixiaoche-4 {
	width:85px;
	height:81px;
	background-size:85px 81px;
	margin:39px auto 15px
}
.ico-yixiaoche-1-new {
	background:url(/frontend/web/img/ico_yixiaoche_1_new.png) no-repeat
}
.ico-yixiaoche-2-new {
	background:url(/frontend/web/img/ico_yixiaoche_2_new.png) no-repeat
}
.ico-yixiaoche-3-new {
	background:url(/frontend/web/img/ico_yixiaoche_3_new.png) no-repeat
}
.ico-yixiaoche-1-new, .ico-yixiaoche-2-new, .ico-yixiaoche-3-new {
	width:135px;
	height:122px;
	background-size:135px 123px;
	margin:39px auto 15px
}
.alert-text-center {
	font-size:1.4rem;
	margin:0 0 15px
}
.alert-text-center span {
	color:#999
}
.alert-text-center strong {
	color:#f80
}
.alert-text-center p {
	margin:0 0 10px;
	line-height:20px;
	text-align:center
}
.alert-text-left {
	text-align:left;
	font-size:1.4rem;
	margin:15px 10px
}
.alert-text-left span {
	color:#B5B5B5
}
.alert-text-left strong {
	color:#f80
}
.prompt-block {
	width:275px;
	border-left:2px solid #DADADA;
	background:#F3F3F3;
	padding:20px 10px 10px 13px;
	font-size:1.2rem;
	color:#333
}
.prompt-block h6 {
	font-size:1.4rem;
	color:#666;
	margin-bottom:15px
}
.prompt-block li {
	margin-bottom:10px;
	background:url(/frontend/web/img/ico_li_dot.gif) no-repeat 2px center;
	background-size:3px 3px;
	padding:0 0 0 10px
}
.web-agreement {
	font-size:1.2rem;
	padding:10px 0
}
.web-agreement h1 {
	font-size:1.4rem;
	text-align:center
}
.web-agreement h2 {
	padding:18px 0
}
.web-agreement p {
	line-height:22px;
	text-indent:2em
}
.m-form-box input[type="text"], .m-form-box input[type="password"], .m-form-box textarea {
	width:91%;
	height:28px;
	padding:0 5px;
	border:1px solid #DDD;
	-moz-box-shadow:2px 2px 2px #EEE inset;
	-webkit-box-shadow:2px 2px 2px #EEE inset;
	box-shadow:2px 2px 2px #EEE inset;
	font-size:1.4rem;
	margin:5px auto;
	display:block
}
.m-form-box {
	padding:10px
}
.m-form-box textarea {
	height:150px;
	padding:5px
}
.m-form-box li {
	font-size:1.6rem;
	margin:10px 0
}
.m-form-box .reg {
	font-size:1.4rem;
	padding:0 10px
}
.m-form-box .reg span {
	float:right;
	margin-right:5px
}
.m-form-box .reg span a {
	margin-left:5px
}
.m-form-box .alert {
	padding:0 10px;
	font-size:1.4rem;
	color:#c00
}
.m-form-box .text {
	padding:0 10px
}
.m-form-box .text strong {
	font-weight:bold
}
.m-form-box .clearf {
	clear:both
}
.m-btn-more-news {
	width:94%;
	height:24px;
	display:block;
	margin:5px auto;
	padding:8px 0 0 0
}
.m-btn-blue {
	background:-webkit-gradient(linear, left top, left bottom, from(#5088b8), to(#275682));
	background:-moz-linear-gradient(top, #5088b8, #275682);
	border:1px solid #3b6e9c;
	text-align:center;
	color:#fff
}
.m-tips {
	background:#e9e9e9;
	font-size:1.2rem;
	overflow:hidden;
	padding:20px 0 10px 14px;
	margin:0 10px
}
.m-tips h6 {
	font-size:1.4rem;
	color:#333;
	padding:0 0 10px
}
.m-tips ul li {
	background:url(/frontend/web/img/reg_li_dot.gif) no-repeat left center;
	background-size:3px 3px;
	padding:0 0 0 10px;
	margin:0 0 12px
}
.m-tips p.text {
	line-height:20px;
	padding:0 10px 0 0;
	color:#666
}
.m-jihuo-tips {
	width:100%;
	border-top:1px solid #D9D9D9;
	font-size:1.2rem;
	text-align:center;
	color:#999
}
.m-jihuo-tips p {
	padding:12px 0 0
}
.m-jihuo-tips .ico-jihuo {
	background:url(/frontend/web/img/reg_ico_alert.gif) no-repeat left center;
	background-size:8px 8px;
	padding:0 0 0 12px
}
.m-login-ttlogo {
	text-align:center
}
.m-login-ttlogo .yiche-logo {
	width:171px;
	height:62px;
	background:url(/frontend/web/img/logo.png) no-repeat;
	background-size:100%;
	margin:30px auto 0
}
.m-login-ttlogo p {
	font-size:2.0rem;
	font-weight:bold;
	margin:12px 0 23px
}
.m-login-ttlogo p em {
	display:block;
	font-size:1.2rem;
	padding:10px 0 0
}
.m-3login-head {
	overflow:hidden;
	font-size:1.2rem;
	line-height:20px;
	margin:20px 10px
}
.m-3login-head .head-img {
	width:60px;
	height:60px;
	float:left
}
.m-3login-head .head-img img {
	border-radius:60px
}
.m-3login-head .head-txt {
	padding:0 0 0 70px
}
.m-3login-head .head-txt p a {
	color:#f80
}
.text_gray {
	color:#999
}
.ma_33logo.gray{ color:#990;}
.m-3login-other {
	width:100%;
	border-top:1px solid #E1E1E1;
	margin:40px 10px 0;
	position:relative
}
.m-3login-other span {
	background:#f5f5f5;
	font-size:1.2rem;
	color:#999;
	padding:0 14px;
	position:absolute;
	top:-7px;
	left:50%;
	margin-left:-62px
}
.m-3login-other ul {
	overflow:hidden;
	margin:16px 0 0
}
.m-3login-other li {
	font-size:1.4rem;
	float:left;
	width:48%;
	height:40px;
	line-height:40px;
	text-align:center
}
.m-3login-other li a {
	color:#333;
	display:block;
	box-shadow:0 0 0 1px #D4D4D4 inset;
	border-radius:5px
}
.m-3login-other li.login-qq a {
	margin-right:5px;
	background:#fff
}
.m-3login-other li.login-weibo a {
	margin-left:5px;
	background:#fff
}
.m-3login-other li.login-qq em {
	background:url(/frontend/web/img/m_ico_qqlogo.png) no-repeat left center;
	background-size:21px 24px;
	padding:6px 0 6px 30px
}
.m-3login-other li.login-weibo em {
	background:url(/frontend/web/img/m_ico_sinaweibologo.png) no-repeat left center;
	background-size:23px 18px;
	padding:6px 0 6px 35px
}
.m-3login-page p {
	font-size:1.2rem;
	color:#666;
	margin:20px 0 0
}
.m-3login-page ul {
	overflow:hidden;
	margin:30px 0 0
}
.m-3login-page li {
	text-indent:-999em;
	float:left;
	margin-left:40px
}
.m-3login-page li.login-qq {
	margin-left:60px
}
.m-3login-page li.login-qq a {
	width:58px;
	height:58px;
	background:#fff url(/frontend/web/img/m_ico_qqlogo.png) no-repeat center center;
	background-size:34px 39px;
	border:1px solid #D4D4D4;
	border-radius:5px;
	display:block
}
.m-3login-page li.login-weibo a {
	width:58px;
	height:58px;
	background:#fff url(/frontend/web/img/m_ico_sinaweibologo.png) no-repeat center center;
	background-size:45px 35px;
	border:1px solid #D4D4D4;
	border-radius:5px;
	display:block
}
.mgt40 {
	margin-top:40px
}
.mgt50 {
	margin-top:50px
}
.menu {
	height:40px
}
.menu ul li a {
	font-size:15px;
	text-align:center;
	height:39px;
	line-height:39px;
	display:block;
	float:left;
	width:50%;
	border-bottom:1px solid #ececec
}
.menu ul li a, .menu ul li a:link, .menu ul li a:visited {
	color:#666
}
.menu ul li a.current {
	color:#297dcc;
	border-bottom:2px solid #297dcc;
	height:38px
}
.btn-white {
	border:1px solid #ccc;
	display:block;
	height:39px;
	line-height:39px;
	background:#fff;
	text-align:center;
	color:#666;
	margin:25px 0 15px;
	border-radius:3px;
	font-size:1.6rem
}
.btn-white:hover, .btn-white:active {
	background:#fff;
	color:#666
}
.login-wrap .btn-blue2 {
	width:45%;
	float:left;
	margin:25px 9px 15px 10px;
	display:inline;
	padding:0 5px
}
.login-wrap .btn-white {
	width:45%;
	float:left
}
.fzcl_m{
.font-size: 1.5rem;

  background: #fff; width:80%; float:left; overflow:hidden; height:51px;}
.fzcl{  position: relative;
  border-bottom: 1px solid #ececec;
  background: #fff;
  padding: 4px 0;}
.flyyy{padding-left:10px; width:95%; }
.fzcl_m input {
  height: 40px;
  line-height: 40px;
  border: 0;
  font-size: 16px;
  border-radius: 0;
  display: block;
  position: relative;
  z-index: 1;
  color: #b7b7b7;
  outline:none;
}
.fzcl_a{width:20%; float:right;}

.btn-blue5{
  display: block;
  height:50px;
  line-height: 51px;
  background: #297dcc;
  text-align: center;
  color: #FFF;
  font-size: 1.6rem;}
.fzcl_c{width:90%; margin:auto;}
.fzcl_b{padding-top:20px; font-size:16px; line-height:30px;}
.fzcl_b_l{float:left;width:39%; text-align:center;border:1px solid; border-color:rgba(183,183,183,0.8) }
.fzcl_b_r{float:left;width:59%; text-align:center;border:1px solid; border-color:rgba(183,183,183,0.8)}
.mtop{margin-top:-1px;}

#btn_Login{width:96%;border:0 none;margin:25px auto}
.mbt-page{padding-bottom:130px;}

</style>
<title><?php echo Html::encode($this->title) ?></title>
</head>
<body>



<div class="login-wrap">
    <?php $form = ActiveForm::begin(['id' => 'login-form',
        'fieldConfig' => [
            'template' => "{input}",
            'options' => [
                'tag'=> false
            ]
        ]

    ]); ?>
    <div class="m-login-ttlogo">
      <div class="yiche-logo"> </div>
      <p> 一个帐号，一部手机！ <em>动动手指，趟在家里就能赚钱</em> </p>
    </div>
    <div class="menu">

    </div>
    <div class="input-box">
      <div class="input-item"> <i class="yonghu"></i>
      <?= Html::activeTextInput( $model, 'identity', ['class'=>'three-character','placeholder'=>'手机/邮箱/用户名'] )?>
       </div>
      <div class="input-item">
      <i class="mima"></i>
      <?= Html::activeTextInput( $model, 'password', ['class'=>'three-character','type'=>'password','placeholder'=>'请输入您的密码'] )?>
        </div>

    </div>

    <div id="divMsg" class="input-alert-bottom"> </div>
    <?php echo Html::submitButton(Yii::t('frontend', '登录'), ['class' => 'btn-blue', 'id'=>'btn_Login', 'name' => 'login-button']) ?>
    <div class="bottom-info">
<!--         <a target="_top" href="#" class="fl">忘记密码？</a> -->
        <a target="_top" href="注册.htm" class="fr">新用户注册</a>
    </div>

  <?php ActiveForm::end(); ?>
  <?php if($model->hasErrors()):?>
<script>
alert('<?php echo array_values($model->getFirstErrors())[0]?>');
</script>
<?php endif;?>
</div>
</body>
</html>

