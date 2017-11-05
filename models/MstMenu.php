<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mst_menu".
 *
 * @property string $kode_cab
 * @property string $kode_menu
 * @property integer $menu_order
 * @property string $nama_menu
 * @property string $ket_1
 * @property string $upd_by
 * @property string $upd_dt_tm
 * @property integer $is_cancel
 */
class MstMenu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mst_menu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kode_menu'], 'required'],
            [['menu_order', 'is_cancel'], 'integer'],
            [['upd_dt_tm'], 'safe'],
            [['kode_cab', 'kode_menu'], 'string', 'max' => 32],
            [['nama_menu'], 'string', 'max' => 255],
            [['ket_1'], 'string', 'max' => 1024],
            [['upd_by'], 'string', 'max' => 64],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'kode_cab' => 'Kode Cab',
            'kode_menu' => 'Kode Menu',
            'menu_order' => 'Menu Order',
            'nama_menu' => 'Nama Menu',
            'ket_1' => 'Ket 1',
            'upd_by' => 'Upd By',
            'upd_dt_tm' => 'Upd Dt Tm',
            'is_cancel' => 'Is Cancel',
        ];
    }
}
