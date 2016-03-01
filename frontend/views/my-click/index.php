<?php

use yii\helpers\Html;
use yii\grid\GridView;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\search\MyClick */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'My Clicks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="my-click-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create My Click', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_id',
            'article_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    
</div>