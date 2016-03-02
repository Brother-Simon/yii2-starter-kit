<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Learns';
?>
<div class="basic-info-picture">
  <div class="b-return"> <a id="gobackElm" href="javascript:;" class="btn-return">返回</a> <span>新手学堂</span> </div>
</div>

<!-- 正文 start -->
<div class="m-detail-top">
  <?php Html::tag('h1', '新手学堂')?>
  <p class="m-post-author"> &nbsp;&nbsp;&nbsp;新手学堂&nbsp;&nbsp;&nbsp;</p>
</div>
<article>
  <div class="m-detail-con"  >
  <p><?php echo $data->content;?></p>
  </div>
</article>
<!-- 正文 end -->