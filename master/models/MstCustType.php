<?php

namespace app\master\models;

use Yii;

/**
 * This is the model class for table "mst_cust_type".
 *
 * @property integer $kode_cust_type
 * @property string $nama_cust_type
 * @property string $description
 * @property string $created_by
 * @property string $created_date
 * @property string $modified_by
 * @property string $modified_date
 * @property integer $status
 */
class MstCustType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mst_cust_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kode_cust_type', 'nama_cust_type', 'created_by'], 'required'],
            [['kode_cust_type', 'status'], 'integer'],
            [['created_date', 'modified_date'], 'safe'],
            [['nama_cust_type', 'created_by', 'modified_by'], 'string', 'max' => 30],
            [['description'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'kode_cust_type' => 'Kode Cust Type',
            'nama_cust_type' => 'Nama Cust Type',
            'description' => 'Description',
            'created_by' => 'Created By',
            'created_date' => 'Created Date',
            'modified_by' => 'Modified By',
            'modified_date' => 'Modified Date',
            'status' => 'Status',
        ];
    }
}
