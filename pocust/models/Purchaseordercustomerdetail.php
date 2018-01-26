<?php

namespace app\pocust\models;

use Yii;

/**
 * This is the model class for table "purchase_order_detail".
 *
 * @property integer $id_po_detail
 * @property integer $id_po_header
 * @property string $kode_item
 * @property string $jumlah_item
 * @property string $kode_stock
 * @property string $harga_per_satuan_unit
 * @property string $total_harga_per_satuan_unit
 * @property string $created_by
 * @property string $created_date
 * @property string $modified_by
 * @property string $modified_date
 * @property boolean $is_active
 *
 * @property PurchaseOrder $idPoHeader
 */
class Purchaseordercustomerdetail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'purchaseordercustomerdetail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            
            [['id_pocust_header'], 'integer'],
            [['jumlah_item', 'created_date', 'modified_date'], 'safe'],
            [['harga_per_satuan_unit', 'total_harga_per_satuan_unit'], 'number'],
            [['is_active'], 'boolean'],
            [['kode_item', 'created_by', 'modified_by'], 'string', 'max' => 30],
            [['nama_item'], 'string', 'max' => 100],
            [['keterangan'], 'string', 'max' => 255],
            [['id_pocust_header'], 'exist', 
                'skipOnError' => true, 
                'targetClass' => PurchaseOrderCustomer::className(), 
                'targetAttribute' => ['id_pocust_header' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Id Po Detail',
            'id_pocust_header' => 'Id PO Customer Header',
            'kode_item' => 'Kode Item',
            'nama_item' => 'Nama Item',
            'jumlah_item' => 'Jumlah Item',
            'keterangan' => 'keterangan',
            'harga_per_satuan_unit' => 'Harga Per Satuan Unit',
            'total_harga_per_satuan_unit' => 'Total Harga Per Satuan Unit',
            'created_by' => 'Created By',
            'created_date' => 'Created Date',
            'modified_by' => 'Modified By',
            'modified_date' => 'Modified Date',
            'is_active' => 'Is Active',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    
     public function getPurchaseordercustomer()
    {
        return $this->hasOne(Purchaseordercustomer::className(), ['id' => 'id_pocust_header']);
    }
    
   /* public function getIdPoHeader()
    {
        return $this->hasOne(PurchaseOrder::className(), ['id_po_header' => 'id_po_header']);
    }
    */

    /**
     * @inheritdoc
     * @return PurchaseOrderQuery the active query used by this AR class.
     */
    /*public static function find()
    {
        return new PurchaseOrderQuery(get_called_class());
    }
    */
}
