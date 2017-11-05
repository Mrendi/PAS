<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\MstPacketProject;

/**
 * MstPacketProjectSearch represents the model behind the search form about `app\models\MstPacketProject`.
 */
class MstPacketProjectSearch extends MstPacketProject
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kode_packet_project', 'nama_packet_project', 'description', 'created_by', 'created_date', 'modified_by', 'modified_date', 'kode_lokasi_project', 'kode_map_packet_lokasi'], 'safe'],
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
        $query = MstPacketProject::find();

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

        $query->andFilterWhere(['like', 'kode_packet_project', $this->kode_packet_project])
            ->andFilterWhere(['like', 'nama_packet_project', $this->nama_packet_project])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'created_by', $this->created_by])
            ->andFilterWhere(['like', 'modified_by', $this->modified_by])
            ->andFilterWhere(['like', 'kode_lokasi_project', $this->kode_lokasi_project])
            ->andFilterWhere(['like', 'kode_map_packet_lokasi', $this->kode_map_packet_lokasi]);

        return $dataProvider;
    }
}
