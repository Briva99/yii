<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Pasien;

/**
 * PasienSearch represents the model behind the search form of `backend\models\Pasien`.
 */
class PasienSearch extends Pasien
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pasien', 'notelp_pasien'], 'integer'],
            [['nama_pasien', 'alamat_pasien', 'pasien_start_date', 'pasien_created_date', 'status_pasien', 'logo'], 'safe'],
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
        $query = Pasien::find();

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
            'id_pasien' => $this->id_pasien,
            'notelp_pasien' => $this->notelp_pasien,
            'pasien_start_date' => $this->pasien_start_date,
            'pasien_created_date' => $this->pasien_created_date,
        ]);

        $query->andFilterWhere(['like', 'nama_pasien', $this->nama_pasien])
            ->andFilterWhere(['like', 'alamat_pasien', $this->alamat_pasien])
            ->andFilterWhere(['like', 'status_pasien', $this->status_pasien])
            ->andFilterWhere(['like', 'logo', $this->logo]);

        return $dataProvider;
    }
}
