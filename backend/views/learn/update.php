<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Learn */

$this->title = 'Update Learn: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Learns', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="learn-update">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
