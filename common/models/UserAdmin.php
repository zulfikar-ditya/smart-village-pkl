<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property int $roles_id
 * @property string $name
 * @property string $username
 * @property string $password
 * @property string $auth_key
 * @property string|null $password_reset_token
 * @property string $access_token
 * @property string $email
 * @property string $photo
 * @property string $last_login
 * @property int|null $penduduk_id
 * @property string $created_at
 * @property string $updated_at
 *
 * @property LaporAduan[] $laporAduans
 * @property LaporAduan[] $laporAduans0
 * @property Mitra[] $mitras
 * @property Pembangunan[] $pembangunans
 * @property Pembangunan[] $pembangunans0
 * @property Pembangunan[] $pembangunans1
 * @property RequestPembangunan[] $requestPembangunans
 * @property Penduduk $penduduk
 */
class UserAdmin extends \yii\db\ActiveRecord
{
    /**
     * timsstamp
     */
    public function behaviors()
    {
        return [
            \yii\behaviors\TimestampBehavior::className()
        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['roles_id', 'name', 'username', 'password', 'auth_key', 'email', ], 'required'],
            [['roles_id', 'penduduk_id'], 'integer'],
            [['last_login', 'created_at', 'updated_at'], 'safe'],
            [['name', 'password', 'password_reset_token', 'access_token', 'email',], 'string', 'max' => 255],
            [['username'], 'string', 'max' => 100],
            [['auth_key'], 'string', 'max' => 32],
            [['password_reset_token'], 'unique'],
            [['penduduk_id'], 'exist', 'skipOnError' => true, 'targetClass' => Penduduk::className(), 'targetAttribute' => ['penduduk_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'roles_id' => 'Roles ID',
            'name' => 'Name',
            'username' => 'Username',
            'password' => 'Password',
            'auth_key' => 'Auth Key',
            'password_reset_token' => 'Password Reset Token',
            'access_token' => 'Access Token',
            'email' => 'Email',
            'photo' => 'Photo',
            'last_login' => 'Last Login',
            'penduduk_id' => 'Penduduk ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[LaporAduans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLaporAduans()
    {
        return $this->hasMany(LaporAduan::className(), ['user_id' => 'id']);
    }

    /**
     * Gets query for [[LaporAduans0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLaporAduans0()
    {
        return $this->hasMany(LaporAduan::className(), ['user_id' => 'id']);
    }

    /**
     * Gets query for [[Mitras]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMitras()
    {
        return $this->hasMany(Mitra::className(), ['user_id' => 'id']);
    }

    /**
     * Gets query for [[Pembangunans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPembangunans()
    {
        return $this->hasMany(Pembangunan::className(), ['user_id' => 'id']);
    }

    /**
     * Gets query for [[Pembangunans0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPembangunans0()
    {
        return $this->hasMany(Pembangunan::className(), ['user_id' => 'id']);
    }

    /**
     * Gets query for [[Pembangunans1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPembangunans1()
    {
        return $this->hasMany(Pembangunan::className(), ['user_id' => 'id']);
    }

    /**
     * Gets query for [[RequestPembangunans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRequestPembangunans()
    {
        return $this->hasMany(RequestPembangunan::className(), ['user_id' => 'id']);
    }

    /**
     * Gets query for [[Penduduk]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenduduk()
    {
        return $this->hasOne(Penduduk::className(), ['id' => 'penduduk_id']);
    }

    public function getRoles()
    {
        return $this->hasOne(Roles::className(), ['id' => 'roles_id']);
    }
}
