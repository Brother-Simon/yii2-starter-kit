<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;
use yii\helpers\BaseUrl;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

<div class="mbt-page">

  <!-- header end -->
  <div class="clear"></div>
  <!--顶部 end-->

  <div class="basic-info-picture">
    <div class="b-return"> <a id="gobackElm" href="javascript:;" class="btn-return">返回</a> <span>提取佣金</span> </div>
  </div>


<div class="login-wrap">
<?= Html::beginForm('', 'post', ['enctype' => 'multipart/form-data']) ?>
     <div class="input-box">
  		<div  class="input-item">
           <div class="txyj"> 可提佣金：<?php echo $total_commission?></div>
         </div>
      	<div  class="input-item">
      	<?= Html::errorSummary($model, ['class' => 'errors','header'=>'提现失败，注意：']) ?>
      	<?= Html::activeInput('text', $model, 'commission', ['placeholder' => '请输入提现金额']) ?>
        </div>
    </div>
<?= Html::submitButton('提取', ['class' => 'btn-blue', 'id'=>'a_submit', 'style'=>['width'=>'98%']]) ?>
<?= Html::endForm() ?>
</div>
