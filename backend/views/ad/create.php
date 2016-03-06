<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Ad */

$this->title = 'Create Ad';
$this->params['breadcrumbs'][] = ['label' => 'Ads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ad-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
