<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mst_customer_pas".
 *
 * @property string $kode_customer
 * @property string $nama_customer
 * @property integer $kode_cust_type
 * @property string $description
 * @property string $created_by
 * @property string $created_date
 * @property string $modified_by
 * @property string $modified_date
 * @property integer $status
 */
class MstCustomerPas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mst_customer_pas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kode_customer', 'nama_customer', 'kode_cust_type', 'created_by'], 'required'],
            [['kode_cust_type', 'status'], 'integer'],
            [['created_date', 'modified_date'], 'safe'],
            [['kode_customer'], 'string', 'max' => 10],
            [['nama_customer'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 255],
            [['created_by', 'modified_by'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'kode_customer' => 'Kode Customer',
            'nama_customer' => 'Nama Customer',
            'kode_cust_type' => 'Kode Cust Type',
            'description' => 'Description',
            'created_by' => 'Created By',
            'created_date' => 'Created Date',
            'modified_by' => 'Modified By',
            'modified_date' => 'Modified Date',
            'status' => 'Status',
        ];
    }
}
