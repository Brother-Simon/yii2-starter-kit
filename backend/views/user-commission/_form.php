<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\UserCommission */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="user-commission-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php echo $form->errorSummary($model); ?>

    <?php echo $form->field($model, 'id')->textInput() ?>

    <?php echo $form->field($model, 'user_id')->textInput() ?>

    <?php echo $form->field($model, 'commission')->textInput() ?>

    <?php echo $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?php echo Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
