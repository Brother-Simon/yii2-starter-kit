<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\UserCommission */

$this->title = 'Create User Commission';
$this->params['breadcrumbs'][] = ['label' => 'User Commissions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-commission-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
