<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "lapor_aduan".
 *
 * @property int $id
 * @property string $foto
 * @property string $deskripsi
 * @property int $user_id
 * @property int $pembangunan_id
 * @property string $status
 * @property string $created_at
 * @property string $updated_at
 */
class LaporAduan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lapor_aduan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'foto', 'deskripsi', 'user_id', 'pembangunan_id', 'status'], 'required'],
            [['id', 'user_id', 'pembangunan_id'], 'integer'],
            [['deskripsi', 'status'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['foto'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'foto' => 'Foto',
            'deskripsi' => 'Deskripsi',
            'user_id' => 'User ID',
            'pembangunan_id' => 'Pembangunan ID',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
