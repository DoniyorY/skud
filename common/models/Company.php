<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "company".
 *
 * @property int $id
 * @property string $name
 * @property string $address
 * @property string $phone
 * @property int $created
 * @property int $status
 */
class Company extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'company';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'address', 'phone', 'created', 'status'], 'required'],
            [['created', 'status'], 'integer'],
            [['name', 'address', 'phone'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'address' => 'Адрес',
            'phone' => 'Номер телефона',
            'created' => 'Дата создания',
            'status' => 'Статус',
        ];
    }
}
