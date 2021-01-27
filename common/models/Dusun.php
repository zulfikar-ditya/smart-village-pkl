<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "dusun".
 *
 * @property int $id
 * @property string $nama_dusun
 */
class Dusun extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dusun';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_dusun'], 'required'],
            [['id'], 'integer'],
            [['nama_dusun'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_dusun' => 'Nama Dusun',
        ];
    }
}
