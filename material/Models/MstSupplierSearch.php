<?php

namespace app\material\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\material\models\MstSupplier;

/**
 * MstSupplierSearch represents the model behind the search form about `app\material\models\MstSupplier`.
 */
class MstSupplierSearch extends MstSupplier
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['supplier_code', 'supplier_name', 'description', 'created_by', 'created_date', 'modified_by', 'modified_date', 'supp_type', 'initial_po', 'sales_name', 'address_supplier', 'telephon_supplier', 'fax_supplier'], 'safe'],
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
        $query = MstSupplier::find();

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

        $query->andFilterWhere(['like', 'supplier_code', $this->supplier_code])
            ->andFilterWhere(['like', 'supplier_name', $this->supplier_name])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'created_by', $this->created_by])
            ->andFilterWhere(['like', 'modified_by', $this->modified_by])
            ->andFilterWhere(['like', 'supp_type', $this->supp_type])
            ->andFilterWhere(['like', 'initial_po', $this->initial_po])
            ->andFilterWhere(['like', 'sales_name', $this->sales_name])
            ->andFilterWhere(['like', 'address_supplier', $this->address_supplier])
            ->andFilterWhere(['like', 'telephon_supplier', $this->telephon_supplier])
            ->andFilterWhere(['like', 'fax_supplier', $this->fax_supplier]);

        return $dataProvider;
    }
    
    
    public function getSuppbycode($param) {
        $query = MstSupplier::find()
                 ->where(['supplier_code' => $param])
                 ->one();
        
        return $query;
    }
    
     public function getSuppByName($param) {
        $query = MstSupplier::find()
                 ->where(['supplier_name' => $param])
                 ->one();
        
        return $query;
    }
}
