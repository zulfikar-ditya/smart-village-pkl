<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "request_pembangunan".
 *
 * @property int $id
 * @property string $judul
 * @property string $deskripsi
 * @property int $user_id
 * @property int $kategori_pembangunan_id
 * @property string $status
 * @property string|null $created_at
 * @property string $updated_at
 */
class RequestPembangunan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'request_pembangunan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['judul', 'deskripsi', 'user_id', 'kategori_pembangunan_id', 'status'], 'required'],
            [['id', 'user_id', 'kategori_pembangunan_id'], 'integer'],
            [['deskripsi', 'status'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['judul'], 'string', 'max' => 45],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['kategori_pembangunan_id'], 'exist', 'skipOnError' => true, 'targetClass' => KategoriPembangunan::className(), 'targetAttribute' => ['kategori_pembangunan_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'judul' => 'Judul',
            'deskripsi' => 'Deskripsi',
            'user_id' => 'User ID',
            'kategori_pembangunan_id' => 'Kategori Pembangunan ID',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
