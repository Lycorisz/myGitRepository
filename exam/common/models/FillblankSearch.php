<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Fillblank;

/**
 * FillblankSearch represents the model behind the search form of `common\models\Fillblank`.
 */
class FillblankSearch extends Fillblank
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fb_id'], 'integer'],
            [['fb_info', 'fb_answer', 'fb_chapter', 'fb_profile'], 'safe'],
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
        $query = Fillblank::find();

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
            'fb_id' => $this->fb_id,
        ]);

        $query->andFilterWhere(['like', 'fb_info', $this->fb_info])
            ->andFilterWhere(['like', 'fb_answer', $this->fb_answer])
            ->andFilterWhere(['like', 'fb_profile', $this->fb_profile]);

        $query->join('INNER JOIN','chapter','fillblank.fb_chapter=chapter.ch_id');
        $query->andFilterWhere(['like','chapter.ch_name',$this->fb_chapter]);
        return $dataProvider;
    }
}
