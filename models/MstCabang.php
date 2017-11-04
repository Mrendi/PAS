<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mst_cabang".
 *
 * @property string $kode_cab
 * @property string $nama_cab
 * @property string $alamat_cab
 * @property string $telp_cab
 * @property string $contact_1
 * @property string $hp_contact1
 * @property string $created_by
 * @property string $created_date
 * @property string $modified_by
 * @property string $modified_date
 * @property integer $status
 */
class MstCabang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mst_cabang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kode_cab', 'created_by', 'created_date'], 'required'],
            [['created_date', 'modified_date'], 'safe'],
            [['status'], 'integer'],
            [['kode_cab', 'telp_cab', 'hp_contact1', 'created_by', 'modified_by'], 'string', 'max' => 32],
            [['nama_cab', 'contact_1'], 'string', 'max' => 255],
            [['alamat_cab'], 'string', 'max' => 300],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'kode_cab' => 'Kode Cab',
            'nama_cab' => 'Nama Cab',
            'alamat_cab' => 'Alamat Cab',
            'telp_cab' => 'Telp Cab',
            'contact_1' => 'Contact 1',
            'hp_contact1' => 'Hp Contact1',
            'created_by' => 'Created By',
            'created_date' => 'Created Date',
            'modified_by' => 'Modified By',
            'modified_date' => 'Modified Date',
            'status' => 'Status',
        ];
    }
}
