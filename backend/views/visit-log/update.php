<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\VisitLog $model */

$this->title = 'Update Visit Log: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Visit Logs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="visit-log-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
