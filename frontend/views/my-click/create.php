<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\MyClick */

$this->title = 'Create My Click';
$this->params['breadcrumbs'][] = ['label' => 'My Clicks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="my-click-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
