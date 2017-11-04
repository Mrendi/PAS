<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mst_usr".
 *
 * @property string $kode_cab
 * @property string $kode_usr
 * @property string $nama_usr
 * @property string $pass_usr
 * @property string $telp_usr
 * @property string $ktp_usr
 * @property string $scan_ktp
 * @property string $hp_usr
 * @property string $email_usr
 * @property string $email_2_kntr
 * @property string $email_3
 * @property string $ket_1
 * @property string $ket_2
 * @property string $created_by
 * @property string $created_date
 * @property string $modified_by
 * @property string $modified_date
 * @property integer $status
 * @property string $auth
 * @property string $kodegrup
 * @property integer $lppbm_approval_code
 * @property integer $po_approval_code
 */
class MstUsr extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mst_usr';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kode_usr'], 'required'],
            [['created_date', 'modified_date'], 'safe'],
            [['status', 'lppbm_approval_code', 'po_approval_code'], 'integer'],
            [['kode_cab', 'kode_usr', 'telp_usr', 'hp_usr', 'created_by', 'modified_by', 'kodegrup'], 'string', 'max' => 32],
            [['nama_usr', 'scan_ktp', 'ket_1', 'ket_2'], 'string', 'max' => 255],
            [['pass_usr', 'auth'], 'string', 'max' => 1024],
            [['ktp_usr', 'email_usr', 'email_2_kntr', 'email_3'], 'string', 'max' => 64],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'kode_cab' => 'Kode Cab',
            'kode_usr' => 'Kode Usr',
            'nama_usr' => 'Nama Usr',
            'pass_usr' => 'Pass Usr',
            'telp_usr' => 'Telp Usr',
            'ktp_usr' => 'Ktp Usr',
            'scan_ktp' => 'Scan Ktp',
            'hp_usr' => 'Hp Usr',
            'email_usr' => 'Email Usr',
            'email_2_kntr' => 'Email 2 Kntr',
            'email_3' => 'Email 3',
            'ket_1' => 'Ket 1',
            'ket_2' => 'Ket 2',
            'created_by' => 'Created By',
            'created_date' => 'Created Date',
            'modified_by' => 'Modified By',
            'modified_date' => 'Modified Date',
            'status' => 'Status',
            'auth' => 'Auth',
            'kodegrup' => 'Kodegrup',
            'lppbm_approval_code' => 'Lppbm Approval Code',
            'po_approval_code' => 'Po Approval Code',
        ];
    }
}
