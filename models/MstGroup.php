<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mst_group".
 *
 * @property string $kodegrup
 * @property string $namagrup
 * @property string $createdby
 * @property string $createddate
 * @property string $modifiedby
 * @property string $modifieddate
 * @property string $description
 * @property integer $is_cancel
 */
class MstGroup extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mst_group';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kodegrup'], 'required'],
            [['createddate', 'modifieddate'], 'safe'],
            [['is_cancel'], 'integer'],
            [['kodegrup'], 'string', 'max' => 32],
            [['namagrup'], 'string', 'max' => 255],
            [['createdby', 'modifiedby'], 'string', 'max' => 64],
            [['description'], 'string', 'max' => 75],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'kodegrup' => 'Kodegrup',
            'namagrup' => 'Namagrup',
            'createdby' => 'Createdby',
            'createddate' => 'Createddate',
            'modifiedby' => 'Modifiedby',
            'modifieddate' => 'Modifieddate',
            'description' => 'Description',
            'is_cancel' => 'Is Cancel',
        ];
    }
}
