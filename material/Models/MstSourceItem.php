<?php

namespace app\material\models;

use Yii;

/**
 * This is the model class for table "mst_source_item".
 *
 * @property string $kode_source_item
 * @property string $nama_source_item
 * @property string $description
 * @property string $created_by
 * @property string $created_date
 * @property string $modified_by
 * @property string $modified_date
 * @property integer $status
 */
class MstSourceItem extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mst_source_item';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kode_source_item', 'nama_source_item', 'created_by'], 'required'],
            [['created_date', 'modified_date'], 'safe'],
            [['status'], 'integer'],
            [['kode_source_item'], 'string', 'max' => 10],
            [['nama_source_item', 'created_by', 'modified_by'], 'string', 'max' => 30],
            [['description'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'kode_source_item' => 'Kode Source Item',
            'nama_source_item' => 'Nama Source Item',
            'description' => 'Description',
            'created_by' => 'Created By',
            'created_date' => 'Created Date',
            'modified_by' => 'Modified By',
            'modified_date' => 'Modified Date',
            'status' => 'Status',
        ];
    }
}
