<?php

namespace app\master\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\master\models\MstUsr;

/**
 * MstUsrSearch represents the model behind the search form about `app\master\models\MstUsr`.
 */
class MstUsrSearch extends MstUsr
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kode_cab', 'kode_usr', 'nama_usr', 'pass_usr', 'telp_usr', 'ktp_usr', 'scan_ktp', 'hp_usr', 'email_usr', 'email_2_kntr', 'email_3', 'ket_1', 'ket_2', 'created_by', 'created_date', 'modified_by', 'modified_date', 'auth', 'kodegrup'], 'safe'],
            [['status', 'lppbm_approval_code', 'po_approval_code'], 'integer'],
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
        $query = MstUsr::find();

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
            'lppbm_approval_code' => $this->lppbm_approval_code,
            'po_approval_code' => $this->po_approval_code,
        ]);

        $query->andFilterWhere(['like', 'kode_cab', $this->kode_cab])
            ->andFilterWhere(['like', 'kode_usr', $this->kode_usr])
            ->andFilterWhere(['like', 'nama_usr', $this->nama_usr])
            ->andFilterWhere(['like', 'pass_usr', $this->pass_usr])
            ->andFilterWhere(['like', 'telp_usr', $this->telp_usr])
            ->andFilterWhere(['like', 'ktp_usr', $this->ktp_usr])
            ->andFilterWhere(['like', 'scan_ktp', $this->scan_ktp])
            ->andFilterWhere(['like', 'hp_usr', $this->hp_usr])
            ->andFilterWhere(['like', 'email_usr', $this->email_usr])
            ->andFilterWhere(['like', 'email_2_kntr', $this->email_2_kntr])
            ->andFilterWhere(['like', 'email_3', $this->email_3])
            ->andFilterWhere(['like', 'ket_1', $this->ket_1])
            ->andFilterWhere(['like', 'ket_2', $this->ket_2])
            ->andFilterWhere(['like', 'created_by', $this->created_by])
            ->andFilterWhere(['like', 'modified_by', $this->modified_by])
            ->andFilterWhere(['like', 'auth', $this->auth])
            ->andFilterWhere(['like', 'kodegrup', $this->kodegrup]);

        return $dataProvider;
    }
}
