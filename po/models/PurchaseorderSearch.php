<?php

namespace app\po\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\po\models\Purchaseorder;
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
class PurchaseorderSearch extends Purchaseorder
{
   
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['po_number'],'string', 'max' => 50],
            [['po_date', 'wo_number', 'shipment_date', 'created_date', 'modified_date'], 'safe'],
            [['total_po'], 'number'],
            [['is_active'], 'boolean'],
            [['po_number', 'sales_name'], 'string', 'max' => 50],
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
        $query = Purchaseorder::find();

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
            'po_number' => $this->po_number,
            'po_date' => $this->po_date,
            
        ]);

        $query->andFilterWhere(['like', 'po_number', $this->po_number])
            ->andFilterWhere(['like', 'po_date', $this->po_date])
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
