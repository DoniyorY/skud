<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\User $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-12">
            <?= $form->field($model, 'company_id')->dropDownList(\yii\helpers\ArrayHelper::map(\common\models\Company::find()->all(), 'id', 'name'),['prompt'=>'Выберите компанию . . .']) ?>
        </div>
        <div class="col-md-12">
            <?= $form->field($model, 'username')->textInput(['maxLength' => true]) ?>
        </div>
        <div class="col-md-12">
            <?= $form->field($model, 'password_hash')->textInput(['maxLength' => true]) ?>
        </div>
        <div class="col-md-12">
            <?= $form->field($model, 'role_id')->dropDownList(Yii::$app->params['user_role'],['prompt'=>'Выберите роль . . .']) ?>
        </div>
        <div class="form-group col-md-12 mt-2">
            <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success w-100']) ?>
        </div>
    </div>



    <?php ActiveForm::end(); ?>

</div>
