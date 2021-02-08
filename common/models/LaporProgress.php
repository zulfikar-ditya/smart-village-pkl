<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "lapor_progress".
 *
 * @property int $id
 * @property string $image
 * @property string $tanggal
 * @property float $capaian_progress
 * @property string $uraian_pekerjaan
 * @property int $pembangunan_id
 */
class LaporProgress extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lapor_progress';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['image', 'tanggal', 'capaian_progress', 'uraian_pekerjaan', 'pembangunan_id'], 'required'],
            [['id', 'pembangunan_id'], 'integer'],
            [['tanggal'], 'safe'],
            [['capaian_progress'], 'number'],
            [['uraian_pekerjaan'], 'string'],
            [['image'], 'image', 'extensions' => 'png, jpg, jpeg'],
            [['pembangunan_id'], 'exist', 'skipOnError' => true, 'targetClass' => Pembangunan::className(), 'targetAttribute' => ['pembangunan_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image' => 'Image',
            'tanggal' => 'Tanggal',
            'capaian_progress' => 'Capaian Progress',
            'uraian_pekerjaan' => 'Uraian Pekerjaan',
            'pembangunan_id' => 'Pembangunan ID',
        ];
    }

    /**
     * get pembangunan id
     */
    public function getPembangunan() {
        return $this->hasOne(Pembangunan::className(), ['id' => 'pembangunan_id']);
    }
}
