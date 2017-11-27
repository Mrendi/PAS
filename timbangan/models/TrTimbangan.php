<?php

namespace app\timbangan\models;

use Yii;

/**
 * This is the model class for table "tr_timbangan".
 *
 * @property string $kode_cab
 * @property string $no_form
 * @property string $no_tr_timbangan
 * @property string $no_truck
 * @property string $tanggal
 * @property string $no_po
 * @property string $no_sj
 * @property string $nama_supir
 * @property string $kode_relasi
 * @property string $kode_barang
 * @property string $kode_supplier
 * @property string $kode_customer
 * @property string $kode_barcode
 * @property string $in_datetime
 * @property double $in_jml_berat
 * @property string $in_capture1
 * @property string $in_capture2
 * @property string $out_datetime
 * @property double $out_jml_berat
 * @property string $out_capture1
 * @property string $out_capture2
 * @property double $jml_netton
 * @property double $jml_bruto
 * @property double $jml_potongan
 * @property string $keterangan1
 * @property string $keterangan2
 * @property string $keterangan3
 * @property string $do_scan1
 * @property string $do_scan2
 * @property integer $tr_status
 * @property integer $is_cancel
 * @property string $upd_by
 * @property integer $cekpembayaran
 * @property string $cekpembayaran_upd_by
 * @property string $cekpembayaran_upd_dt_tm
 */
class TrTimbangan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tr_timbangan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['no_tr_timbangan'], 'required'],
            [['tanggal', 'in_datetime', 'out_datetime', 'cekpembayaran_upd_dt_tm'], 'safe'],
            [['in_jml_berat', 'out_jml_berat', 'jml_netton', 'jml_bruto', 'jml_potongan'], 'number'],
            [['tr_status', 'is_cancel', 'cekpembayaran'], 'integer'],
            [['kode_cab', 'no_form', 'no_tr_timbangan', 'no_truck', 'no_po', 'no_sj', 'kode_relasi', 'kode_barang', 'kode_supplier', 'kode_customer', 'kode_barcode'], 'string', 'max' => 32],
            [['nama_supir', 'keterangan1', 'keterangan2', 'keterangan3'], 'string', 'max' => 255],
            [['in_capture1', 'in_capture2', 'out_capture1', 'out_capture2', 'do_scan1', 'do_scan2'], 'string', 'max' => 510],
            [['upd_by', 'cekpembayaran_upd_by'], 'string', 'max' => 64],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'kode_cab' => 'Kode Cab',
            'no_form' => 'No Form',
            'no_tr_timbangan' => 'No Tr Timbangan',
            'no_truck' => 'No Truck',
            'tanggal' => 'Tanggal',
            'no_po' => 'No Po',
            'no_sj' => 'No Sj',
            'nama_supir' => 'Nama Supir',
            'kode_relasi' => 'Kode Relasi',
            'kode_barang' => 'Kode Barang',
            'kode_supplier' => 'Kode Supplier',
            'kode_customer' => 'Kode Customer',
            'kode_barcode' => 'Kode Barcode',
            'in_datetime' => 'In Datetime',
            'in_jml_berat' => 'In Jml Berat',
            'in_capture1' => 'In Capture1',
            'in_capture2' => 'In Capture2',
            'out_datetime' => 'Out Datetime',
            'out_jml_berat' => 'Out Jml Berat',
            'out_capture1' => 'Out Capture1',
            'out_capture2' => 'Out Capture2',
            'jml_netton' => 'Jml Netton',
            'jml_bruto' => 'Jml Bruto',
            'jml_potongan' => 'Jml Potongan',
            'keterangan1' => 'Keterangan1',
            'keterangan2' => 'Keterangan2',
            'keterangan3' => 'Keterangan3',
            'do_scan1' => 'Do Scan1',
            'do_scan2' => 'Do Scan2',
            'tr_status' => 'Tr Status',
            'is_cancel' => 'Is Cancel',
            'upd_by' => 'Upd By',
            'cekpembayaran' => 'Cekpembayaran',
            'cekpembayaran_upd_by' => 'Cekpembayaran Upd By',
            'cekpembayaran_upd_dt_tm' => 'Cekpembayaran Upd Dt Tm',
        ];
    }
}
