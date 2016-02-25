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
     <h3>13244444444</h3>

  </div>
  <div class="user-center-bottom">
    <ul>
      <li><a class="remove-a" href="我的点击.htm">
        <h5> 0</h5>
        <em>今日收入</em> </a></li>
      <li><a class="remove-a" href="提取佣金.htm">
        <h5> 0</h5>
        <em>可提佣金</em> </a></li>
      <li><a href="已提佣金.htm">
        <h5> 0</h5>
        <em>已提佣金</em> </a></li>
        <li><a href="我的点击.htm">
        <h5> 0</h5>
        <em>总收入佣金</em> </a></li>
    </ul>
  </div>
  <!--用户信息 End--> 
</div>

</div>
<div class="card-news card-news-list">
  <ul>
   <?php foreach ($article as $item): ?>
    <li><a href="<?= \yii\helpers\Url::toRoute('/article') ?>">
      <div class="img-box"><img src="/frontend/web/img/car.jpg"></div>
      <h4><?php echo $item['title']; ?></h4>
      <em>点击可赚取<?= Html::tag('span', Html::encode($item['commission']), ['class' => 'red']) ?></em>
      <em><span><?php echo Yii::$app->formatter->asDatetime($item['created_at']) ?></span><i class="ico-comment huifu comment_0_6577194">立即转发</i></em></a>
    </li>
   <?php endforeach; ?>
  </ul>
</div>
<!-- news list end --> 
<!-- pages start -->
<div class="m-pages"> 
<a class="m-pages-pre" href="/">上一页</a>
  <div class="m-pages-num">
    <div class="m-pages-num-con">2/155</div>
    <div class="m-pages-num-arrow"></div>
  </div>
  <select  onchange="SearchPage(this.value)" >
    <option  value="1">1</option>
    <option selected="selected" value="2">2</option>
    <option  value="3">3</option>
    <option  value="4">4</option>
    <option  value="5">5</option>
    <option  value="6">6</option>
    <option  value="7">7</option>

  </select>
  <a  class="m-pages-next" href="/3/">下一页</a> 
  </div>
<!--内容 End-->
<div class="wrap"> <a href="#" class="btn-one btn-gray">退出登录</a> </div>
</div>
