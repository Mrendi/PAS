<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mst_map_lokasi_project".
 *
 * @property string $kode_lokasi_project
 * @property string $kode_customer
 * @property string $kode_lokasi
 * @property string $description
 * @property string $created_by
 * @property string $created_date
 * @property string $modified_by
 * @property string $modified_date
 * @property integer $status
 */
class MstMapLokasiProject extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mst_map_lokasi_project';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kode_lokasi_project', 'kode_customer', 'kode_lokasi', 'created_by'], 'required'],
            [['created_date', 'modified_date'], 'safe'],
            [['status'], 'integer'],
            [['kode_lokasi_project'], 'string', 'max' => 20],
            [['kode_customer', 'kode_lokasi'], 'string', 'max' => 10],
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
            'kode_lokasi_project' => 'Kode Lokasi Project',
            'kode_customer' => 'Kode Customer',
            'kode_lokasi' => 'Kode Lokasi',
            'description' => 'Description',
            'created_by' => 'Created By',
            'created_date' => 'Created Date',
            'modified_by' => 'Modified By',
            'modified_date' => 'Modified Date',
            'status' => 'Status',
        ];
    }
}
