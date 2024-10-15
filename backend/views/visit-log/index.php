<?php

use common\models\VisitLog;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var common\models\search\VisitLogSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Visit Logs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="visit-log-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Visit Log', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'student_id',
            'enter_time:datetime',
            'exit_time:datetime',
            'real_enter_time:datetime',
            //'real_exit_time:datetime',
            //'manual_enter_time:datetime',
            //'manual_exit_time:datetime',
            //'user_id',
            //'company_id',
            //'status',
            //'terminal_enter',
            //'terminal_exit',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, VisitLog $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
