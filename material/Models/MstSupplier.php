<?php

namespace app\material\models;

use Yii;

/**
 * This is the model class for table "mst_supplier".
 *
 * @property string $supplier_code
 * @property string $supplier_name
 * @property string $description
 * @property string $created_by
 * @property string $created_date
 * @property string $modified_by
 * @property string $modified_date
 * @property integer $status
 * @property string $supp_type
 * @property string $initial_po
 * @property string $sales_name
 * @property string $address_supplier
 * @property string $telephon_supplier
 * @property string $fax_supplier
 */
class MstSupplier extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mst_supplier';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['supplier_code', 'supplier_name', 'created_by'], 'required'],
            [['created_date', 'modified_date'], 'safe'],
            [['status'], 'integer'],
            [['supplier_code'], 'string', 'max' => 10],
            [['supplier_name'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 255],
            [['created_by', 'modified_by'], 'string', 'max' => 30],
            [['supp_type'], 'string', 'max' => 1],
            [['initial_po'], 'string', 'max' => 5],
            [['sales_name', 'address_supplier', 'telephon_supplier'], 'string', 'max' => 225],
            [['fax_supplier'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'supplier_code' => 'Supplier Code',
            'supplier_name' => 'Supplier Name',
            'description' => 'Description',
            'created_by' => 'Created By',
            'created_date' => 'Created Date',
            'modified_by' => 'Modified By',
            'modified_date' => 'Modified Date',
            'status' => 'Status',
            'supp_type' => 'Supp Type',
            'initial_po' => 'Initial Po',
            'sales_name' => 'Sales Name',
            'address_supplier' => 'Address Supplier',
            'telephon_supplier' => 'Telephon Supplier',
            'fax_supplier' => 'Fax Supplier',
        ];
    }
}
