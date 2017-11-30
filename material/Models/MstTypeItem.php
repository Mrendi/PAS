<?php

namespace app\material\models;

use Yii;

/**
 * This is the model class for table "mst_type_item".
 *
 * @property string $kode_type_item
 * @property string $nama_type_item
 * @property string $description
 * @property string $created_by
 * @property string $created_date
 * @property string $modified_by
 * @property string $modified_date
 * @property integer $status
 * @property integer $type_code
 */
class MstTypeItem extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mst_type_item';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kode_type_item', 'nama_type_item', 'created_by', 'type_code'], 'required'],
            [['created_date', 'modified_date'], 'safe'],
            [['status', 'type_code'], 'integer'],
            [['kode_type_item'], 'string', 'max' => 10],
            [['nama_type_item'], 'string', 'max' => 20],
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
            'kode_type_item' => 'Kode Type Item',
            'nama_type_item' => 'Nama Type Item',
            'description' => 'Description',
            'created_by' => 'Created By',
            'created_date' => 'Created Date',
            'modified_by' => 'Modified By',
            'modified_date' => 'Modified Date',
            'status' => 'Status',
            'type_code' => 'Type Code',
        ];
    }
}
