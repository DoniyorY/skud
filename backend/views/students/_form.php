<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Students $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="students-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'fullname')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'company_id')->textInput() ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'mother_name')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'father_name')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4 mt-4">
            <?= $form->field($model, 'imageFile')->fileInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="form-group mt-2">
        <?= Html::submitButton('Добавить', ['class' => ' w-100 btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
