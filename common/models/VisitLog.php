<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "visit_log".
 *
 * @property int $id
 * @property int $student_id
 * @property int $enter_time
 * @property int $exit_time
 * @property int $real_enter_time
 * @property int $real_exit_time
 * @property int $manual_enter_time
 * @property int $manual_exit_time
 * @property int $user_id
 * @property int $company_id
 * @property int $status
 * @property int $terminal_enter
 * @property int $terminal_exit
 */
class VisitLog extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'visit_log';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['student_id', 'enter_time', 'exit_time', 'real_enter_time', 'real_exit_time', 'manual_enter_time', 'manual_exit_time', 'user_id', 'company_id', 'status', 'terminal_enter', 'terminal_exit'], 'required'],
            [['student_id', 'enter_time', 'exit_time', 'real_enter_time', 'real_exit_time', 'manual_enter_time', 'manual_exit_time', 'user_id', 'company_id', 'status', 'terminal_enter', 'terminal_exit'], 'integer'],
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
            'enter_time' => 'Время входа',
            'exit_time' => 'Время выхода',
            'real_enter_time' => 'Реальная дата входа',
            'real_exit_time' => 'Реальная дата выхода',
            'manual_enter_time' => 'Ручная дата входа',
            'manual_exit_time' => 'Ручная дата выхода',
            'user_id' => 'Пользователь',
            'company_id' => 'Компания',
            'status' => 'Статус',
            'terminal_enter' => 'Терминал входа',
            'terminal_exit' => 'Терминал выхода',
        ];
    }

    public function getStudent()
    {
        return $this->hasOne(Students::className(), ['id' => 'student_id']);
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
