<?php

namespace app\master\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\master\models\MstSatuan;

/**
 * MstSatuanSearch represents the model behind the search form about `app\master\models\MstSatuan`.
 */
class MstSatuanSearch extends MstSatuan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kode_satuan', 'nama_satuan', 'satuan_ukur', 'ket_satuan', 'created_by', 'created_date', 'modified_by', 'modified_date'], 'safe'],
            [['nilai_per_tingkat', 'tingkat_satuan', 'status'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = MstSatuan::find();

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
            'nilai_per_tingkat' => $this->nilai_per_tingkat,
            'tingkat_satuan' => $this->tingkat_satuan,
            'created_date' => $this->created_date,
            'modified_date' => $this->modified_date,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'kode_satuan', $this->kode_satuan])
            ->andFilterWhere(['like', 'nama_satuan', $this->nama_satuan])
            ->andFilterWhere(['like', 'satuan_ukur', $this->satuan_ukur])
            ->andFilterWhere(['like', 'ket_satuan', $this->ket_satuan])
            ->andFilterWhere(['like', 'created_by', $this->created_by])
            ->andFilterWhere(['like', 'modified_by', $this->modified_by]);

        return $dataProvider;
    }
}
