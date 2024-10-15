<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\ExtraPhone $model */

$this->title = 'Update Extra Phone: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Extra Phones', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="extra-phone-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
