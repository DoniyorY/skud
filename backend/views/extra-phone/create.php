<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\ExtraPhone $model */

$this->title = 'Create Extra Phone';
$this->params['breadcrumbs'][] = ['label' => 'Extra Phones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="extra-phone-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
