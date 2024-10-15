<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\search\VisitLogSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="visit-log-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'student_id') ?>

    <?= $form->field($model, 'enter_time') ?>

    <?= $form->field($model, 'exit_time') ?>

    <?= $form->field($model, 'real_enter_time') ?>

    <?php // echo $form->field($model, 'real_exit_time') ?>

    <?php // echo $form->field($model, 'manual_enter_time') ?>

    <?php // echo $form->field($model, 'manual_exit_time') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <?php // echo $form->field($model, 'company_id') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'terminal_enter') ?>

    <?php // echo $form->field($model, 'terminal_exit') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
