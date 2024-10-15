<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\VisitLog $model */

$this->title = 'Create Visit Log';
$this->params['breadcrumbs'][] = ['label' => 'Visit Logs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="visit-log-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
