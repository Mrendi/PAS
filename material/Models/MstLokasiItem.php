<?php

namespace app\material\models;

use Yii;

/**
 * This is the model class for table "mst_lokasi_item".
 *
 * @property string $kode_lokasi_item
 * @property string $nama_lokasi_item
 * @property string $description
 * @property string $created_by
 * @property string $created_date
 * @property string $modified_by
 * @property string $modified_date
 * @property integer $status
 */
class MstLokasiItem extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mst_lokasi_item';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kode_lokasi_item', 'nama_lokasi_item', 'created_by'], 'required'],
            [['created_date', 'modified_date'], 'safe'],
            [['status'], 'integer'],
            [['kode_lokasi_item'], 'string', 'max' => 10],
            [['nama_lokasi_item'], 'string', 'max' => 50],
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
            'kode_lokasi_item' => 'Kode Lokasi Item',
            'nama_lokasi_item' => 'Nama Lokasi Item',
            'description' => 'Description',
            'created_by' => 'Created By',
            'created_date' => 'Created Date',
            'modified_by' => 'Modified By',
            'modified_date' => 'Modified Date',
            'status' => 'Status',
        ];
    }
}
