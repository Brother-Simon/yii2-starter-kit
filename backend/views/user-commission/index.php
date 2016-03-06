<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '佣金管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-commission-index">


    <p>
    </p>

    <?php echo GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'user_id',
            [
                'attribute'=>'user_id',
                'value'=>function ($model) {
//                 return (new \backend\models\UserCommission())->user->wechat;
                    return 1;
                },
                'filter'=>\yii\helpers\ArrayHelper::map(\common\models\User::find()->all(), 'id', 'wechat'),
                'label'=>'目录'
            ],
            'commission',
            'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
