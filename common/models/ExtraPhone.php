<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "extra_phone".
 *
 * @property int $id
 * @property int $student_id
 * @property string $phone
 * @property string $content
 * @property int $created
 * @property int $status
 */
class ExtraPhone extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'extra_phone';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['student_id', 'phone', 'content', 'created', 'status'], 'required'],
            [['student_id', 'created', 'status'], 'integer'],
            [['phone'], 'string', 'max' => 13],
            [['content'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'student_id' => 'Студент',
            'phone' => 'Номер телефона',
            'content' => 'Примечание',
            'created' => 'Дата создания',
            'status' => 'Статус',
        ];
    }

    public function getStudent()
    {
        return $this->hasOne(Students::className(),['id' => 'student_id']);
    }
}
