<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mst_usr_privilages".
 *
 * @property string $kode_cab
 * @property string $kode_usr_priv
 * @property string $kodegrup
 * @property string $kode_menu
 * @property integer $accs_usr
 * @property string $upd_by
 * @property string $upd_dt_tm
 * @property integer $is_cancel
 * @property string $description
 */
class MstUsrPrivilages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mst_usr_privilages';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kode_usr_priv'], 'required'],
            [['accs_usr', 'is_cancel'], 'integer'],
            [['upd_dt_tm'], 'safe'],
            [['kode_cab', 'kode_usr_priv', 'kodegrup', 'kode_menu'], 'string', 'max' => 32],
            [['upd_by'], 'string', 'max' => 64],
            [['description'], 'string', 'max' => 75],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'kode_cab' => 'Kode Cab',
            'kode_usr_priv' => 'Kode Usr Priv',
            'kodegrup' => 'Kodegrup',
            'kode_menu' => 'Kode Menu',
            'accs_usr' => 'Accs Usr',
            'upd_by' => 'Upd By',
            'upd_dt_tm' => 'Upd Dt Tm',
            'is_cancel' => 'Is Cancel',
            'description' => 'Description',
        ];
    }
}
