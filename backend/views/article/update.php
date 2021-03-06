<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Article */

$this->title = Yii::t('backend', '更新文章: ', [
    'modelClass' => 'Article',
]) . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', '文章管理'), 'url' => ['index']];
$this->params['breadcrumbs'][] = Yii::t('backend', '更新');
?>
<div class="article-update">

    <?php echo $this->render('_form', [
        'model' => $model,
        'categories' => $categories,
        'ads' => $ads,
        'articles' => $articles
    ]) ?>

</div>
