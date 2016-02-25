<?php
/**
 * @author Eugene Terentev <eugene@terentev.net>
 * @var $model common\models\TimelineEvent
 */
?>
<div class="timeline-item">
    <span class="time">
        <i class="fa fa-clock-o"></i>
        <?php echo Yii::$app->formatter->asRelativeTime($model->created_at) ?>
    </span>
    <h3 class="timeline-header">
        <?php echo Yii::t('backend', '你有新的消息') ?>
    </h3>

    <div class="timeline-body">
        <dl>
            <dt><?php echo Yii::t('backend', '应用') ?>:</dt>
            <dd><?php echo $model->application ?></dd>

            <dt><?php echo Yii::t('backend', '目录') ?>:</dt>
            <dd><?php echo $model->category ?></dd>

            <dt><?php echo Yii::t('backend', 'Event') ?>:</dt>
            <dd><?php echo $model->event ?></dd>

            <dt><?php echo Yii::t('backend', '事件') ?>:</dt>
            <dd><?php echo Yii::$app->formatter->asDatetime($model->created_at,'Y-m-d') ?></dd>
        </dl>
    </div>
</div>