<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mst_satuan".
 *
 * @property string $kode_satuan
 * @property string $nama_satuan
 * @property string $satuan_ukur
 * @property string $nilai_per_tingkat
 * @property string $tingkat_satuan
 * @property string $ket_satuan
 * @property string $created_by
 * @property string $created_date
 * @property string $modified_by
 * @property string $modified_date
 * @property integer $status
 */
class MstSatuan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mst_satuan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kode_satuan'], 'required'],
            [['nilai_per_tingkat', 'tingkat_satuan', 'status'], 'integer'],
            [['created_date', 'modified_date'], 'safe'],
            [['kode_satuan', 'created_by', 'modified_by'], 'string', 'max' => 32],
            [['nama_satuan', 'satuan_ukur'], 'string', 'max' => 255],
            [['ket_satuan'], 'string', 'max' => 1024],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'kode_satuan' => 'Kode Satuan',
            'nama_satuan' => 'Nama Satuan',
            'satuan_ukur' => 'Satuan Ukur',
            'nilai_per_tingkat' => 'Nilai Per Tingkat',
            'tingkat_satuan' => 'Tingkat Satuan',
            'ket_satuan' => 'Ket Satuan',
            'created_by' => 'Created By',
            'created_date' => 'Created Date',
            'modified_by' => 'Modified By',
            'modified_date' => 'Modified Date',
            'status' => 'Status',
        ];
    }
}
