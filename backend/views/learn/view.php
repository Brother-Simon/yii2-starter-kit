<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Learn */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => '新手学堂', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="learn-view">

    <p>
        <?php echo Html::a('更新', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?php echo Html::a('删除', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '确认删除这个项目么?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?php echo DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'content:ntext',
        ],
    ]) ?>

</div>
