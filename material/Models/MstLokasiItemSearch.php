<?php

namespace app\material\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\material\models\MstLokasiItem;

/**
 * MstLokasiItemSearch represents the model behind the search form about `app\material\models\MstLokasiItem`.
 */
class MstLokasiItemSearch extends MstLokasiItem
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kode_lokasi_item', 'nama_lokasi_item', 'description', 'created_by', 'created_date', 'modified_by', 'modified_date'], 'safe'],
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
        $query = MstLokasiItem::find();

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

        $query->andFilterWhere(['like', 'kode_lokasi_item', $this->kode_lokasi_item])
            ->andFilterWhere(['like', 'nama_lokasi_item', $this->nama_lokasi_item])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'created_by', $this->created_by])
            ->andFilterWhere(['like', 'modified_by', $this->modified_by]);

        return $dataProvider;
    }
}
