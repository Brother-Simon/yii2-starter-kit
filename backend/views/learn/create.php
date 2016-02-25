<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Learn */

$this->title = 'Create Learn';
$this->params['breadcrumbs'][] = ['label' => 'Learns', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="learn-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
