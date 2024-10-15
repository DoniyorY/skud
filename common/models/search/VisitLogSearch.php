<?php

namespace common\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\VisitLog;

/**
 * VisitLogSearch represents the model behind the search form of `common\models\VisitLog`.
 */
class VisitLogSearch extends VisitLog
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'student_id', 'enter_time', 'exit_time', 'real_enter_time', 'real_exit_time', 'manual_enter_time', 'manual_exit_time', 'user_id', 'company_id', 'status', 'terminal_enter', 'terminal_exit'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = VisitLog::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'student_id' => $this->student_id,
            'enter_time' => $this->enter_time,
            'exit_time' => $this->exit_time,
            'real_enter_time' => $this->real_enter_time,
            'real_exit_time' => $this->real_exit_time,
            'manual_enter_time' => $this->manual_enter_time,
            'manual_exit_time' => $this->manual_exit_time,
            'user_id' => $this->user_id,
            'company_id' => $this->company_id,
            'status' => $this->status,
            'terminal_enter' => $this->terminal_enter,
            'terminal_exit' => $this->terminal_exit,
        ]);

        return $dataProvider;
    }
}
