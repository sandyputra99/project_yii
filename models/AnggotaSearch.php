<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Anggota;

/**
 * AnggotaSearch represents the model behind the search form of `app\models\Anggota`.
 */
class AnggotaSearch extends Anggota
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'nim', 'id_jabatan'], 'integer'],
            [['nama_anggota'], 'safe'],
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
        $query = Anggota::find();

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
            'nim' => $this->nim,
            'id_jabatan' => $this->id_jabatan,
        ]);

        $query->andFilterWhere(['like', 'nama_anggota', $this->nama_anggota]);

        return $dataProvider;
    }
}
