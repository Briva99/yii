<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pasien".
 *
 * @property int $id_pasien
 * @property string $nama_pasien
 * @property string $alamat_pasien
 * @property int $notelp_pasien
 * @property string|null $pasien_start_date
 * @property string|null $pasien_created_date
 * @property string $status_pasien
 * @property string|null $logo
 */
class Pasien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pasien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pasien','nama_pasien', 'alamat_pasien', 'notelp_pasien', 'status_pasien'], 'required'],
            [['id_pasien'], 'string'],
            [['notelp_pasien'], 'integer'],
            [['pasien_start_date', 'pasien_created_date'], 'safe'],
            [['nama_pasien', 'status_pasien'], 'string', 'max' => 50],
            [['alamat_pasien'], 'string', 'max' => 100],
            [['logo'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pasien' => 'Id Pasien',
            'nama_pasien' => 'Nama Pasien',
            'alamat_pasien' => 'Alamat Pasien',
            'notelp_pasien' => 'No telp Pasien',
            'pasien_start_date' => 'Tanggal Lahir',
            'pasien_created_date' => 'Pasien Masuk',
            'status_pasien' => 'Status Pasien',
            'logo' => 'Logo',
        ];
    }
}
