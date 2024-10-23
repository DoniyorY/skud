<?php

use common\models\User;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var common\models\search\UserSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Пользователи';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">
    <div class="row">
        <div class="col-md-8">
            <h1><?= Html::encode($this->title) ?></h1>
        </div>
        <div class="col-md-4">
            <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Добавить
            </button>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?= $this->render('_form', ['model' => new User()]) ?>
                </div>
            </div>
        </div>
    </div>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'rowOptions' => function ($model) {
            return [
                'class' => Yii::$app->params['user_status_class'][$model->status]
            ];
        },
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'username',
            [
                'attribute' => 'created_at',
                'value' => function ($model) {
                    return date('d.m.Y', $model->created_at);
                }
            ],
            //'auth_key',
            //'password_hash',
            //'password_reset_token',
            //'email:email',
            [
                'attribute' => 'role_id',
                'value' => function ($model) {
                    return Yii::$app->params['user_role'][$model->role_id];
                }
            ],
            //'updated_at',
            [
                'attribute' => 'company_id',
                'value' => function ($model) {
                    return $model->company->name;
                }
            ],
            [
                'attribute' => 'status',
                'value' => function ($model) {
                    if ($model->status == User::STATUS_ACTIVE) {
                        return Html::a(Yii::$app->params['user_status'][$model->status], Url::to(['status', 'id' => $model->id, 'status' => 9]),
                            [
                                'class' => 'btn btn-sm btn-success w-100',
                                'data-confirm' => 'Подтвердите действие!!!',
                            ]);
                    } else {
                        return Html::a(Yii::$app->params['user_status'][$model->status], Url::to(['status', 'id' => $model->id, 'status' => 10]),
                            [
                                'class' => 'btn btn-sm btn-danger w-100',
                                'data-confirm'=>'Подтвердите действие!!!'
                            ]);
                    }
                },
                'format' => 'raw'
            ],
            //'verification_token',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, User $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>
