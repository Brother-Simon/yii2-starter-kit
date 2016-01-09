<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\LeaveMessage */
/* @var $form ActiveForm */
?>
<div class="leave-message">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'content') ?>
        <?= $form->field($model, 'user_name') ?>
        <?= $form->field($model, 'email') ?>
        <?= $form->field($model, 'phone') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- leave-message -->
