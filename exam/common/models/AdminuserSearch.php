<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Adminuser;

/**
 * AdminuserSearch represents the model behind the search form of `common\models\Adminuser`.
 */
class AdminuserSearch extends Adminuser
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['admin_id'], 'integer'],
            [['admin_username', 'admin_password', 'admin_email'], 'safe'],
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
        $query = Adminuser::find();

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
            'admin_id' => $this->admin_id,
        ]);

        $query->andFilterWhere(['like', 'admin_username', $this->admin_username])
            ->andFilterWhere(['like', 'admin_password', $this->admin_password])
            ->andFilterWhere(['like', 'admin_email', $this->admin_email]);

        return $dataProvider;
    }
}
