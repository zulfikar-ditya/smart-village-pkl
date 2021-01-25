<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "pembangunan".
 *
 * @property int $id
 * @property string $nama_pembangunan
 * @property string $foto
 * @property float $anggaran
 * @property string $tgl_mulai
 * @property string $tgl_selesai
 * @property string $longitude
 * @property string $latitude
 * @property string $keterangan
 * @property float $prosentase
 * @property int $sumber_dana_pembangunan_id
 * @property int $kategori_pembangunan_id
 * @property int $status_pembangunan_id
 * @property int $user_id
 * @property int $mitra_id
 * @property string $created_at
 * @property string $updated_at
 */
class Pembangunan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pembangunan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'nama_pembangunan', 'foto', 'anggaran', 'tgl_mulai', 'tgl_selesai', 'longitude', 'latitude', 'keterangan', 'prosentase', 'sumber_dana_pembangunan_id', 'kategori_pembangunan_id', 'status_pembangunan_id', 'user_id', 'mitra_id'], 'required'],
            [['id', 'sumber_dana_pembangunan_id', 'kategori_pembangunan_id', 'status_pembangunan_id', 'user_id', 'mitra_id'], 'integer'],
            [['anggaran', 'prosentase'], 'number'],
            [['tgl_mulai', 'tgl_selesai', 'created_at', 'updated_at'], 'safe'],
            [['nama_pembangunan'], 'string', 'max' => 50],
            [['foto', 'keterangan'], 'string', 'max' => 255],
            [['longitude', 'latitude'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_pembangunan' => 'Nama Pembangunan',
            'foto' => 'Foto',
            'anggaran' => 'Anggaran',
            'tgl_mulai' => 'Tgl Mulai',
            'tgl_selesai' => 'Tgl Selesai',
            'longitude' => 'Longitude',
            'latitude' => 'Latitude',
            'keterangan' => 'Keterangan',
            'prosentase' => 'Prosentase',
            'sumber_dana_pembangunan_id' => 'Sumber Dana Pembangunan ID',
            'kategori_pembangunan_id' => 'Kategori Pembangunan ID',
            'status_pembangunan_id' => 'Status Pembangunan ID',
            'user_id' => 'User ID',
            'mitra_id' => 'Mitra ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
