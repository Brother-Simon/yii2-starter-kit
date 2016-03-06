<?php

use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\BaseUrl;
/* @var $this \yii\web\View */
/* @var $content string */

$this->beginContent('@frontend/views/layouts/_clear.php')
?>


    <?php echo $content ?>
<div class="xfk" id="js_xfk">
<ul>
<li><a href="<?= BaseUrl::toRoute('/learn');?>"><img src="/frontend/web/img/a1.png"/><br/><span>新手学堂</span></a></li>
<li><a href="<?= BaseUrl::toRoute('/user');?>"><img src="/frontend/web/img/a2.png"/><br/><span>会员中心</span></a></li>
<li><a href="<?= BaseUrl::toRoute('my-click/index');?>"><img src="/frontend/web/img/a3.png"/><br/><span>我的点击</span></a></li>
<li><a href="<?= BaseUrl::toRoute('vip/get-pay');?>"><img src="/frontend/web/img/a4.png"/><br/><span>提取佣金</span></a></li>
</ul>
</div>
<?php $this->endContent() ?>