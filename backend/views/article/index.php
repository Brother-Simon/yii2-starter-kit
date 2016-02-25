<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\ArticleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('backend', '文章管理');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="article-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php echo Html::a(
            Yii::t('backend', '创建新文章'),
            ['create'],
            ['class' => 'btn btn-success']) ?>
    </p>

    <?php echo GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [

            [
                'attribute'=>'id',
                'label'=>'id'
            ],
            [
                'attribute'=>'slug',
                'label'=>'标识',
            ],
            [
                'attribute'=>'title',
                'label'=>'标题',
            ],
            [
                'attribute'=>'category_id',
                'value'=>function ($model) {
                    return $model->category ? $model->category->title : null;
                },
                'filter'=>\yii\helpers\ArrayHelper::map(\common\models\ArticleCategory::find()->all(), 'id', 'title'),
                'label'=>'目录'
            ],
            [
                'attribute'=>'author_id',
                'value'=>function ($model) {
                    return $model->author->username;
                },
                'label'=>'作者'
            ],
            [
                'class'=>\common\grid\EnumColumn::className(),
                'attribute'=>'status',
                'enum'=>[
                    Yii::t('backend', 'Not Published'),
                    Yii::t('backend', 'Published')
                ],
                'label'=>'状态'
            ],
            [
                'attribute'=>'commission',
                'label'=>'佣金'
            ],
            [
                'attribute'=>'published_at',
                'label'=>'发布时间',
                'format'=>'datetime'
            ],
            [
                'attribute'=>'created_at',
                'label'=>'创建时间',
                'format'=>'datetime'
            ],

            // 'updated_at',

            [
                'class' => 'yii\grid\ActionColumn',
                'template'=>'{update} {delete}'
            ]
        ]
    ]); ?>

</div>
