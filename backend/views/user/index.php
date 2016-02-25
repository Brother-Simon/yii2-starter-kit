<?php

use common\models\User;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('backend', '用户管理');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <!-- <?php echo Html::a(Yii::t('backend', '创建用户', [
    'modelClass' => 'User',
]), ['create'], ['class' => 'btn btn-success']) ?> -->
    </p>

    <?php echo GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'id',
            [   
                'attribute' => 'username',
                'label' => '用户名'
            ],                             
            [   
                'attribute' => 'email',
                'label' => '邮箱'
            ],
            [
                'class' => \common\grid\EnumColumn::className(),
                'attribute' => 'status',
                'enum' => User::getStatuses(),
                'filter' => User::getStatuses(),
                'label' => '状态'
            ],
            [   
                'attribute' => 'created_at',
                'label' => '创建时间',
                'format' => 'datetime'
            ],
            [   
                'attribute' => 'logged_at',
                'label' => '登录时间',
                'format' => 'datetime'
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
