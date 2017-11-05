<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mst_packet_project".
 *
 * @property string $kode_packet_project
 * @property string $nama_packet_project
 * @property string $description
 * @property string $created_by
 * @property string $created_date
 * @property string $modified_by
 * @property string $modified_date
 * @property integer $status
 * @property string $kode_lokasi_project
 * @property string $kode_map_packet_lokasi
 */
class MstPacketProject extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mst_packet_project';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kode_packet_project', 'nama_packet_project', 'created_by', 'kode_lokasi_project', 'kode_map_packet_lokasi'], 'required'],
            [['created_date', 'modified_date'], 'safe'],
            [['status'], 'integer'],
            [['kode_packet_project'], 'string', 'max' => 10],
            [['nama_packet_project', 'created_by', 'modified_by', 'kode_map_packet_lokasi'], 'string', 'max' => 30],
            [['description'], 'string', 'max' => 255],
            [['kode_lokasi_project'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'kode_packet_project' => 'Kode Packet Project',
            'nama_packet_project' => 'Nama Packet Project',
            'description' => 'Description',
            'created_by' => 'Created By',
            'created_date' => 'Created Date',
            'modified_by' => 'Modified By',
            'modified_date' => 'Modified Date',
            'status' => 'Status',
            'kode_lokasi_project' => 'Kode Lokasi Project',
            'kode_map_packet_lokasi' => 'Kode Map Packet Lokasi',
        ];
    }
}
