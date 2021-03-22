<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Tf;

/**
 * TfSearch represents the model behind the search form of `common\models\Tf`.
 */
class TfSearch extends Tf
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tf_id'], 'integer'],
            [['tf_info', 'tf_answer', 'tf_chapter'], 'safe'],
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
        $query = Tf::find();

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
            'tf_id' => $this->tf_id,
        ]);

        $query->andFilterWhere(['like', 'tf_info', $this->tf_info])
            ->andFilterWhere(['like', 'tf_answer', $this->tf_answer]);

        $query->join('INNER JOIN','chapter','tf.tf_chapter=chapter.ch_id');
        $query->andFilterWhere(['like', 'chapter.ch_name', $this->tf_chapter]);

        return $dataProvider;
    }
}
