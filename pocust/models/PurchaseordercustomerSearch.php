<?php

namespace app\pocust\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\pocust\models\Purchaseordercustomer;
/**
 * This is the model class for table "purchase_order".
 *
 * @property integer $id_po_header
 * @property string $po_number
 * @property string $po_date
 * @property string $wo_number
 * @property string $sales_name
 * @property string $supplier_code
 * @property string $payment_method
 * @property string $shipment_method
 * @property string $shipment_date
 * @property string $total_po
 * @property string $created_by
 * @property string $created_date
 * @property string $modified_by
 * @property string $modified_date
 * @property boolean $is_active
 *
 * @property PurchaseOrderDetail[] $purchaseOrderDetails
 */
class PurchaseordercustomerSearch extends Purchaseorder
{
   
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pocust_number'],'string', 'max' => 50],
            [['pocust_date', 'wocust_number', 'shipment_date', 'created_date', 'modified_date'], 'safe'],
            [['total_po'], 'number'],
            [['is_active'], 'boolean'],
            [['pocust_number', 'sales_name'], 'string', 'max' => 50],
            [['supplier_code'], 'string', 'max' => 10],
            [['payment_method', 'shipment_method'], 'string', 'max' => 75],
            [['created_by', 'modified_by'], 'string', 'max' => 30],
        ];
    }

    
     public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }
  
    public function search($params)
    {
        $query = Purchaseordercustomer::find();

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
            'pocust_number' => $this->pocust_number,
            'pocust_date' => $this->pocust_date,
            
        ]);

        $query->andFilterWhere(['like', 'pocust_number', $this->pocust_number])
            ->andFilterWhere(['like', 'pocust_date', $this->pocust_date])
            ;

        return $dataProvider;
    }

    /**
     * @inheritdoc
     * @return PurchaseOrderQuery the active query used by this AR class.
     */
   // public static function find()
   // {
   //     return new PurchaseOrderQuery(get_called_class());
   // }
}
