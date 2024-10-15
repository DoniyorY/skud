<?php

namespace app\models;

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

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fullname', 'phone', 'created', 'image', 'status', 'mother_name', 'father_name', 'address', 'company_id', 'user_id'], 'required'],
            [['created', 'status', 'company_id', 'user_id'], 'integer'],
            [['fullname', 'phone', 'image', 'mother_name', 'father_name', 'address'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fullname' => 'Fullname',
            'phone' => 'Phone',
            'created' => 'Created',
            'image' => 'Image',
            'status' => 'Status',
            'mother_name' => 'Mother Name',
            'father_name' => 'Father Name',
            'address' => 'Address',
            'company_id' => 'Company ID',
            'user_id' => 'User ID',
        ];
    }
}
