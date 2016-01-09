<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\LeaveMessage */

$this->title = 'Update Leave Message: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Leave Messages', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="leave-message-update">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
