<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Kecamatan;

/**
 * KecamatanSearch represents the model behind the search form of `backend\models\Kecamatan`.
 */
class KecamatanSearch extends Kecamatan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_kec', 'id_kab', 'name'], 'safe'],
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
        $query = Kecamatan::find();

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
        $query->andFilterWhere(['like', 'id_kec', $this->id_kec])
            ->andFilterWhere(['like', 'id_kab', $this->id_kab])
            ->andFilterWhere(['like', 'name', $this->name]);

        return $dataProvider;
    }
}
