<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\ExtraPhone $model */
/** @var ActiveForm $form */
?>
<div class="students-_add_phone">

    <?php $form = ActiveForm::begin(['action' => \yii\helpers\Url::to(['students/add-phone', 'student_id' => $student_id])]); ?>
    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'phone') ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'content') ?>
        </div>
        <div class="col-md-4">
            <div class="form-group mt-4">
                <?= Html::submitButton('Добавить', ['class' => 'btn btn-success w-100']) ?>
            </div>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div><!-- students-_add_phone -->
