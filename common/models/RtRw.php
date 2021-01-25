<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "rt_rw".
 *
 * @property int $id
 * @property string $rw_parent
 * @property int $rt_child
 * @property int $dusun_id
 */
class RtRw extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rt_rw';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'rw_parent', 'rt_child', 'dusun_id'], 'required'],
            [['id', 'rt_child', 'dusun_id'], 'integer'],
            [['rw_parent'], 'string', 'max' => 5],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'rw_parent' => 'Rw Parent',
            'rt_child' => 'Rt Child',
            'dusun_id' => 'Dusun ID',
        ];
    }
}
