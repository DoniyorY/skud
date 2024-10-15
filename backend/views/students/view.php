<?php

use common\models\ExtraPhone;
use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Students $model */

$this->title = $model->fullname;
$this->params['breadcrumbs'][] = ['label' => 'Студент', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="students-view">
    <div class="row">
        <div class="col-md-8">
            <h1><?= Html::encode($this->title) ?></h1>
        </div>
        <div class="col-md-4">
            <div class="btn-group">
                <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
                    'class' => 'btn btn-danger',
                    'data' => [
                        'confirm' => 'Are you sure you want to delete this item?',
                        'method' => 'post',
                    ],
                ]) ?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <h3>Дополнительный телефон</h3>
            <div class="row">
                <div class="col-md-12">
                    <?= $this->render('_add_phone', [
                        'model' => new ExtraPhone(),
                        'student_id' => $model->id,
                    ]) ?>

                    <hr>
                    <table class="table table-sm table-bordered text-center table-striped">
                        <thead>
                        <th>#</th>
                        <th>Номер телефона</th>
                        <th>Примечание</th>
                        <th>Дата создания</th>
                        <th></th>
                        </thead>
                        <tbody>
                        <?php $i = 1;
                        foreach ($phones as $phone): ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $phone->phone ?></td>
                                <td><?= $phone->content ?></td>
                                <td><?= date('d.m.Y H:i', $phone->created) ?></td>
                                <td>
                                    <?= Html::a('<i class="bi bi-trash"></i>', ['delete-phone', 'id' => $phone->id], ['class' => 'btn btn-danger btn-sm']) ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'id',
                    'fullname',
                    'phone',
                    [
                        'attribute' => 'created',
                        'value' => function ($data) {
                            return date('d.m.Y', $data->created);
                        }
                    ],
                    'image',
                    [
                        'attribute' => 'status',
                        'value' => function ($data) {
                            return Yii::$app->params['student_status'][$data->status];
                        }
                    ],
                    'mother_name',
                    'father_name',
                    'address',
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
                ],
            ]) ?>
        </div>
    </div>


</div>
