<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\\models\search\ArticleCategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('backend', '文章目录');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="article-category-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php echo Html::a(Yii::t('backend', '创建文章目录'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php echo GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            [
                'attribute'=>'slug',
                'label'=>'标识',
            ],
            [
                'attribute'=>'title',
                'label'=>'标题',
            ],
            [
                'class'=>\common\grid\EnumColumn::className(),
                'attribute'=>'status',
                'enum'=>[
                    Yii::t('backend', '未启用'),
                    Yii::t('backend', '已启用')
                ],
                'label'=>'状态'
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'template'=>'{update} {delete}'
            ],
        ],
    ]); ?>

</div>
