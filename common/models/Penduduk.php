<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "penduduk".
 *
 * @property int $id
 * @property string $nik
 * @property string $nama_lengkap
 * @property string $tempat_lahir
 * @property string $tanggal_lahir
 * @property string $jenis_kelamin
 * @property int $agama_id
 * @property string $status_perkawinan
 * @property int $pekerjaan_id
 * @property int $pendidikan_id
 * @property int $rt_rw_id
 * @property string $created_at
 * @property string $updated_at
 */
class Penduduk extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penduduk';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'nik', 'nama_lengkap', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin', 'agama_id', 'status_perkawinan', 'pekerjaan_id', 'pendidikan_id', 'rt_rw_id'], 'required'],
            [['id', 'agama_id', 'pekerjaan_id', 'pendidikan_id', 'rt_rw_id'], 'integer'],
            [['tanggal_lahir', 'created_at', 'updated_at'], 'safe'],
            [['jenis_kelamin', 'status_perkawinan'], 'string'],
            [['nik'], 'string', 'max' => 20],
            [['nama_lengkap'], 'string', 'max' => 100],
            [['tempat_lahir'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nik' => 'Nik',
            'nama_lengkap' => 'Nama Lengkap',
            'tempat_lahir' => 'Tempat Lahir',
            'tanggal_lahir' => 'Tanggal Lahir',
            'jenis_kelamin' => 'Jenis Kelamin',
            'agama_id' => 'Agama ID',
            'status_perkawinan' => 'Status Perkawinan',
            'pekerjaan_id' => 'Pekerjaan ID',
            'pendidikan_id' => 'Pendidikan ID',
            'rt_rw_id' => 'Rt Rw ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
