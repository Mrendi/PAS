<?php

namespace app\material\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\material\models\MstTypeItem;

/**
 * MstTypeItemSearch represents the model behind the search form about `app\material\models\MstTypeItem`.
 */
class MstTypeItemSearch extends MstTypeItem
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kode_type_item', 'nama_type_item', 'description', 'created_by', 'created_date', 'modified_by', 'modified_date'], 'safe'],
            [['status', 'type_code'], 'integer'],
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
        $query = MstTypeItem::find();

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
            'type_code' => $this->type_code,
        ]);

        $query->andFilterWhere(['like', 'kode_type_item', $this->kode_type_item])
            ->andFilterWhere(['like', 'nama_type_item', $this->nama_type_item])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'created_by', $this->created_by])
            ->andFilterWhere(['like', 'modified_by', $this->modified_by]);

        return $dataProvider;
    }
}
