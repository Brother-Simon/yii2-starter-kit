<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<header> <a id="gobackElm" class="btn-return" href="javascript:history.back();"></a> 提现成功 </header>
<div class="login-wrap">
  <div class="ico-yixiaoche-1-new"></div>
  <div class="alert-text-center">
    <p> <strong>恭喜您</strong>，提现成功！ </p>
  </div>
  <a href="<?php echo Url::toRoute('site/index')?>" class="btn-blue">继续赚佣</a>

</div>
