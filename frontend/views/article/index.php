<?php
use yii\helpers\Html;
use common\models\Article;
/* @var $this yii\web\View */
$this->title = Yii::t('frontend', 'Articles')
?>
<header> <a class="btn-return" href="javascript:history.back();"></a><?php echo $model->title;?> </header>

<!-- 正文 start -->
<div class="m-detail-top">
  <h1> <?php echo $model->title;?></h1>
  <p class="m-post-author"> <?php echo Yii::$app->formatter->asDate($model->published_at, 'yyyy-MM-dd');?> &nbsp;&nbsp;&nbsp;平台&nbsp;&nbsp;&nbsp;</p>
  <p class="m-post-com-num" id="commentCont"> <a href="#comment"></a> </p>
</div>
<article>
  <div class="m-detail-con"  >
  <?php echo Html::tag('p', Html::encode($model->body))?>
  </div>
</article>
<!-- 正文 end -->


<!-- 相关阅读 start -->
<div class="tt-first">
  <h3> 推荐文章</h3>
</div>
<div class="m-txt-list">
  <ul>
  <?php if(!empty($model['recommend1_id'])):?>
    <li><a href="<?= \yii\helpers\Url::toRoute('/article/'.$model['recommend1_id'].'-'.\Yii::$app->user->id) ?>">
      <p><?php echo Article::findOne(['id'=>$model['recommend1_id']])->title?></p>
      </a></li>
  <?php endif;?>
  <?php if(!empty($model['recommend2_id'])):?>
    <li><a href="<?= \yii\helpers\Url::toRoute('/article/'.$model['recommend2_id'].'-'.\Yii::$app->user->id) ?>">
      <p><?php echo Article::findOne(['id'=>$model['recommend2_id']])->title?></p>
      </a></li>
  <?php endif;?>
  <?php if(!empty($model['recommend3_id'])):?>
    <li><a href="<?= \yii\helpers\Url::toRoute('/article/'.$model['recommend3_id'].'-'.\Yii::$app->user->id) ?>">
      <p><?php echo Article::findOne(['id'=>$model['recommend3_id']])->title?></p>
      </a></li>
  <?php endif;?>
  </ul>
</div>
<div class="wycs"></div>
<script>
function closed()
{
 var aaa=document.getElementById("ad");
 aaa.style.display="none"
}
document.addEventListener("DOMContentLoaded", function() {
	document.getElementById("js_xfk").style.display = 'none';
}, false);

</script>
<div id="ad">
  <div class="guang" > <a href="#"> <img src="<?php echo $ad['img_base_url'].'/'.$ad['img_path']?>"/> </a> </div>
  <div class="guanb"> <img src="/frontend/web/img/ad_app_top_close.png" onclick="closed();"/> </div>
</div>