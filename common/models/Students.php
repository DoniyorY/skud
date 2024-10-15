<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "students".
 *
 * @property int $id
 * @property string $fullname
 * @property string $phone
 * @property int $created
 * @property string $image
 * @property int $status
 * @property string $mother_name
 * @property string $father_name
 * @property string $address
 * @property int $company_id
 * @property int $user_id
 */
class Students extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'students';
    }

    public $imageFile;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fullname', 'phone', 'created', 'image', 'status', 'mother_name', 'father_name', 'address', 'company_id', 'user_id'], 'required'],
            [['created', 'status', 'company_id', 'user_id'], 'integer'],
            [['fullname', 'phone', 'image', 'mother_name', 'father_name', 'address'], 'string', 'max' => 255],
            [['imageFile'], 'file', 'extensions' => 'jpg, gif, png', 'skipOnEmpty' => true],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fullname' => 'Ф.И.О',
            'phone' => 'Номер телефона',
            'created' => 'Дата создания',
            'image' => 'Изображение',
            'status' => 'Статус',
            'mother_name' => 'Ф.И.О Мамы',
            'father_name' => 'Ф.И.О Папы',
            'address' => 'Адрес',
            'company_id' => 'Компания',
            'user_id' => 'Пользователь',
        ];
    }

    public function getCompany()
    {
        return $this->hasOne(Company::className(), ['id' => 'company_id']);
    }

    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
