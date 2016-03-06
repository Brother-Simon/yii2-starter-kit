<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\MyClick */

$this->title = 'Update My Click: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'My Clicks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="my-click-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
