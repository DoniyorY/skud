<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\VisitLog $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="visit-log-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'student_id')->textInput() ?>

    <?= $form->field($model, 'enter_time')->textInput() ?>

    <?= $form->field($model, 'exit_time')->textInput() ?>

    <?= $form->field($model, 'real_enter_time')->textInput() ?>

    <?= $form->field($model, 'real_exit_time')->textInput() ?>

    <?= $form->field($model, 'manual_enter_time')->textInput() ?>

    <?= $form->field($model, 'manual_exit_time')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'company_id')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'terminal_enter')->textInput() ?>

    <?= $form->field($model, 'terminal_exit')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
