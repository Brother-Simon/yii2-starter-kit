<?php

use yii\helpers\Html;
use yii\grid\GridView;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\search\MyClick */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'My Clicks';
?>
<div class="basic-info-picture">
  <div class="b-return"> <a id="gobackElm" href="#" class="btn-return">返回</a> <span>我的点击</span> </div>
</div>
<div class="mbt-page">
  <div class="clear"></div>
  <!--顶部 end-->
  
  <div class="zf_main">
  <div class="zf_top">
   <div class="zf_time">点击时间</div><div class="zf_new">文章标题</div><div class="zf_monery">获得佣金</div></div>
    <ul>
    <?php foreach($data as $key=>$value):?>
     <li ><div class="zf_time"><?php echo Yii::$app->formatter->asDate($value['published_at'], 'yyyy-MM-dd')?></div><div class="zf_tit">
     <a href="<?= \yii\helpers\Url::toRoute('/article/'.$value['id'].'-1') ?>"><?php echo $value['title']?></a></div><div class="zf_monery red"><?php echo $value['commission']?></div></li>
    <?php endforeach;?> 
    </ul>
  </div>
  <!-- news list end --> 
  <div class="clear" ></div>
  <!-- pages start -->
  <div class="m-pages">
  <?php if(isset($links['prev'])):?>
    <a class="m-pages-pre" href="<?php echo $links['prev'];?>">上一页</a>
   <?php endif;?>
    <div class="m-pages-num">
      <div class="m-pages-num-con"><?php echo $page+1?>/<?php echo $pageCount?></div>
      <div class="m-pages-num-arrow"></div>
    </div>
    <select  onchange="SearchPage(this.value)" >
    </select>
    <?php if(isset($links['next'])):?>
  		<a  class="m-pages-next" href="<?php echo $links['next'];?>">下一页</a>
  	<?php endif;?>
    </div>
  <!--内容 End-->
  <div class="wrap"> <a href="#" class="btn-one btn-gray">退出登录</a> </div>
</div>
