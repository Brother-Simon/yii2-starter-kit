<?php
use yii\helpers\Html;
/* @var $this yii\web\View */
$this->title = 'web开发者的该驻足的地方！';
?>
<div class="mbt-page">

<div class="clear"></div>
<!--顶部 end-->

<div class="uc-index">
<!--内容 Begin-->
<div class="user-center">
<img src="/frontend/web/img/bj1.jpg" class="bg" alt="" />


  <div class="content">
    <div class="face-box">
      <div class="img-box"> <a href="#"> <img src="/frontend/web/img/66_07.png"  /> </a> </div>
    </div>
     <h3><?php echo \Yii::$app->user->identity->username?></h3>

  </div>
  <div class="user-center-bottom">
    <ul>
      <li><a class="remove-a" href="我的点击.htm">
        <h5> <?php echo \Yii::$app->user->identity->userProfile->today_commission;?></h5>
        <em>今日收入</em> </a></li>
<!--       <li><a class="remove-a" href="提取佣金.htm"> -->
<!--         <h5> 0</h5> -->
<!--         <em>可提佣金</em> </a></li> -->
<!--       <li><a href="已提佣金.htm"> -->
<!--         <h5> 0</h5> -->
<!--         <em>已提佣金</em> </a></li> -->
        <li><a href="我的点击.htm">
        <h5> <?php echo \Yii::$app->user->identity->userProfile->total_commission;?></h5>
        <em>总收入佣金</em> </a></li>
    </ul>
  </div>
  <!--用户信息 End-->
</div>

</div>
<div class="card-news card-news-list">
  <ul>
   <?php foreach ($article as $item): ?>
    <li><a href="<?= \yii\helpers\Url::toRoute('/article/'.$item['id'].'-'.\Yii::$app->user->id) ?>">
      <div class="img-box"><img src="/frontend/web/img/car.jpg"></div>
      <h4><?php echo $item['title']; ?></h4>
      <em>点击可赚取<?= Html::tag('span', Html::encode($item['commission']), ['class' => 'red']) ?></em>
      <em><span><?php echo Yii::$app->formatter->asDatetime($item['created_at'],'php:m/d/Y H:i:s') ?></span><i class="ico-comment huifu comment_0_6577194">立即转发</i></em></a>
    </li>
   <?php endforeach; ?>
  </ul>
</div>
<!-- pages start -->
<div class="m-pages">
<?php if(isset($links['prev'])):?>
<a class="m-pages-pre" href="<?php echo $links['prev'];?>">上一页</a>
<?php endif;?>
  <div class="m-pages-num">
    <div class="m-pages-num-con"><?php echo $page+1?>/<?php echo $pageCount?></div>
    <div class="m-pages-num-arrow"></div>
  </div>
<!--   <select  onchange="SearchPage(this.value)" > -->
<!--     <option  value="1">1</option> -->
<!--     <option selected="selected" value="2">2</option> -->
<!--     <option  value="3">3</option> -->
<!--     <option  value="4">4</option> -->
<!--     <option  value="5">5</option> -->
<!--     <option  value="6">6</option> -->
<!--     <option  value="7">7</option> -->

<!--   </select> -->
<?php if(isset($links['next'])):?>
  <a  class="m-pages-next" href="<?php echo $links['next'];?>">下一页</a>
  <?php endif;?>
  </div>
<!--内容 End-->
<div class="wrap"> <a href="<?= \yii\helpers\Url::toRoute('/user/sign-in/logout') ?>" class="btn-one btn-gray">退出登录</a> </div>
</div>
