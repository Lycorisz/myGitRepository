<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Choice;

/**
 * ChoiceSearch represents the model behind the search form of `common\models\Choice`.
 */
class ChoiceSearch extends Choice
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cho_id'], 'integer'],
            [['cho_info', 'cho_op1', 'cho_op2', 'cho_op3', 'cho_op4', 'cho_answer', 'cho_profile', 'cho_chap'], 'safe'],
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
        $query = Choice::find();

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
            'cho_id' => $this->cho_id,
        ]);

        $query->andFilterWhere(['like', 'cho_info', $this->cho_info])
            ->andFilterWhere(['like', 'cho_op1', $this->cho_op1])
            ->andFilterWhere(['like', 'cho_op2', $this->cho_op2])
            ->andFilterWhere(['like', 'cho_op3', $this->cho_op3])
            ->andFilterWhere(['like', 'cho_op4', $this->cho_op4])
            ->andFilterWhere(['like', 'cho_answer', $this->cho_answer]);

        $query->join('INNER JOIN','chapter','choice.cho_chap=chapter.ch_id');
        $query->andFilterWhere(['like','chapter.ch_name',$this->cho_chap]);

        return $dataProvider;
    }
}
