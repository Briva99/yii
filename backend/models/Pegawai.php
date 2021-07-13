<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pegawai".
 *
 * @property string $nip
 * @property string $nama
 * @property string $alamat
 * @property string $tempat
 * @property string $tgl_lahir
 * @property string $agama
 * @property string $jenis_kelamin
 * @property string $status_perkawinan
 * @property string $status_pegawai
 * @property string $jabatan
 * @property int $id_jabatan
 * @property string $telepon
 * @property string $email
 */
class Pegawai extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pegawai';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nip', 'nama', 'alamat','tempat','tgl_lahir', 'agama', 'jenis_kelamin', 'status_perkawinan', 'status_pegawai', 'jabatan', 'id_jabatan','telepon', 'email'], 'required'],
            [['nama', 'alamat','tempat'], 'string'],
            [['id_jabatan'], 'integer'],
            [['tgl_lahir'], 'safe'],
            [['nip', 'email'], 'string', 'max' => 32],
            [['agama'], 'string', 'max' => 25],
            [['jenis_kelamin', 'status_perkawinan', 'telepon'], 'string', 'max' => 15],
            [['status_pegawai'], 'string', 'max' => 20],
            [['jabatan'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
        
            'nip' => 'Nip',
            'nama' => 'Nama',
            'alamat' => 'Alamat',
            'tempat' => 'Tempat lahir',
            'tgl_lahir' => 'Tanggal Lahir',
            'agama' => 'Agama',
            'jenis_kelamin' => 'Jenis Kelamin',
            'status_perkawinan' => 'Status Perkawinan',
            'status_pegawai' => 'Status Pegawai',
            'jabatan' => 'Jabatan',
            'id_jabatan' => 'Jabatan',
            'telepon' => 'Telepon',
            'email' => 'Email',
        ];
    }

     public function getJabatanbaru()
            {
                // same as above
                return $this->hasOne(Jabatan::class, ['id_jabatan' => 'id_jabatan']);
                // tabel pegawai id_jabatan (FK) asal
                // tabel jabatan id_jabatan (PK) tujuan
            }
}
