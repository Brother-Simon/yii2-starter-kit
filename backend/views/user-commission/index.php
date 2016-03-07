<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\UserCommission;
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
            [
                'attribute' => 'user_id',
                'label' => '用户id'
                
            ],
            [
                'attribute'=>'user_id',
                'value'=>function ($model) {
                    return $model->user['wechat'];
                },
                'filter'=>\yii\helpers\ArrayHelper::map(\common\models\User::find()->all(), 'id', 'wechat'),
                'label'=>'微信账号'
            ],
            'commission',
            'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
