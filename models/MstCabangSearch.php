<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\MstCabang;

/**
 * MstCabangSearch represents the model behind the search form about `app\models\MstCabang`.
 */
class MstCabangSearch extends MstCabang
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kode_cab', 'nama_cab', 'alamat_cab', 'telp_cab', 'contact_1', 'hp_contact1', 'created_by', 'created_date', 'modified_by', 'modified_date'], 'safe'],
            [['status'], 'integer'],
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
        $query = MstCabang::find();

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
            'created_date' => $this->created_date,
            'modified_date' => $this->modified_date,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'kode_cab', $this->kode_cab])
            ->andFilterWhere(['like', 'nama_cab', $this->nama_cab])
            ->andFilterWhere(['like', 'alamat_cab', $this->alamat_cab])
            ->andFilterWhere(['like', 'telp_cab', $this->telp_cab])
            ->andFilterWhere(['like', 'contact_1', $this->contact_1])
            ->andFilterWhere(['like', 'hp_contact1', $this->hp_contact1])
            ->andFilterWhere(['like', 'created_by', $this->created_by])
            ->andFilterWhere(['like', 'modified_by', $this->modified_by]);

        return $dataProvider;
    }
}
