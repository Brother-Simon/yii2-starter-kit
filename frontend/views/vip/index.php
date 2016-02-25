<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Vips';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vip-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('用户注册', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php var_dump($dataProvider);?>
    

</div>
