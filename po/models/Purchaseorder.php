<?php

namespace app\po\models;

use Yii;

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
class Purchaseorder extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'purchaseorder';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['po_number'], 'required'],
            [['po_date', 'wo_number', 'shipment_date', 'created_date', 'modified_date'], 'safe'],
            [['total_po'], 'number'],
            [['is_active'], 'boolean'],
            [['po_number', 'sales_name'], 'string', 'max' => 50],
            [['supplier_code'], 'string', 'max' => 10],
            [['payment_method', 'shipment_method'], 'string', 'max' => 75],
            [['created_by', 'modified_by'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
  /*  public function attributeLabels()
    {
        return [
            'id' => 'Id Po Header',
            'po_number' => 'Po Number',
            'po_date' => 'Po Date',
            'wo_number' => 'Wo Number',
            'sales_name' => 'Sales Name',
            'supplier_code' => 'Supplier Code',
            'payment_method' => 'Payment Method',
            'shipment_method' => 'Shipment Method',
            'shipment_date' => 'Shipment Date',
            'total_po' => 'Total Po',
            'created_by' => 'Created By',
            'created_date' => 'Created Date',
            'modified_by' => 'Modified By',
            'modified_date' => 'Modified Date',
            'is_active' => 'Is Active',
        ];
    }
*/
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPurchaseorderdetails()
    {
        return $this->hasMany(Purchaseorderdetail::className(), ['id_po_header' => 'id']);
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
