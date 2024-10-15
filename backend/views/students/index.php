<?php

use common\models\Students;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var common\models\search\StudentsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Студент';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="students-index">
    <div class="row">
        <div class="col-md-8">
            <h1><?= Html::encode($this->title) ?></h1>
        </div>
        <div class="col-md-4">
            <?= Html::a('Добавить студента', ['create'], ['class' => 'w-100 btn btn-success']) ?>
        </div>
    </div>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'fullname',
            'phone',
            [
                'attribute' => 'created',
                'value' => function ($model) {
                    return date('d.m.Y H:i:s', $model->created);
                }
            ],
            [
                'attribute' => 'company_id',
                'value' => function ($data) {
                    return $data->company->name;
                }
            ],
            [
                'attribute' => 'user_id',
                'value' => function ($data) {
                    return $data->user->username;
                }
            ],
            //'image',
            [
                'attribute' => 'status',
                'value' => function ($model) {
                    return Html::button(Yii::$app->params['student_status'][$model->status], ['class' => Yii::$app->params['student_status_class'][$model->status]]);
                },
                'format'=>'raw'
            ],
            //'mother_name',
            //'father_name',
            //'address',

            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Students $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>
