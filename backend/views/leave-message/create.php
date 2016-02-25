<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\LeaveMessage */

$this->title = 'Create Leave Message';
$this->params['breadcrumbs'][] = ['label' => 'Leave Messages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="leave-message-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
