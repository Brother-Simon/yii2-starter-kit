<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Ad */

$this->title = 'Update Ad: ' . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Ads', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ad-update">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
