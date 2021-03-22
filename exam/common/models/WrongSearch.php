<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Wrong;

/**
 * WrongSearch represents the model behind the search form of `common\models\Wrong`.
 */
class WrongSearch extends Wrong
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['wrong_id', 'wrong_stuid', 'wrong_cretime'], 'integer'],
            [['wrong_info', 'wrong_status'], 'safe'],
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
        $query = Wrong::find();

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
            'wrong_id' => $this->wrong_id,
            'wrong_stuid' => $this->wrong_stuid,
            'wrong_cretime' => $this->wrong_cretime,
        ]);

        $query->andFilterWhere(['like', 'wrong_info', $this->wrong_info])
            ->andFilterWhere(['like', 'wrong_status', $this->wrong_status]);

        return $dataProvider;
    }
}
