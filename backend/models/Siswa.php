<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "siswa".
 *
 * @property string $kd_siswa
 * @property string $nm_siswa
 * @property string $tgl_lahir
 * @property string $kelamin
 * @property string $alamat
 * @property string $telepon
 * @property string $kd_jurusan
 */
class Siswa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'siswa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_siswa', 'nm_siswa', 'tgl_lahir', 'kelamin', 'alamat', 'telepon', 'kd_jurusan'], 'required'],
            [['tgl_lahir'], 'safe'],
            [['kd_siswa'], 'string', 'max' => 5],
            [['nm_siswa'], 'string', 'max' => 100],
            [['kelamin', 'alamat'], 'string', 'max' => 200],
            [['telepon'], 'string', 'max' => 30],
            [['kd_jurusan'], 'string', 'max' => 3],
            [['kd_siswa'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_siswa' => 'Kd Siswa',
            'nm_siswa' => 'Nm Siswa',
            'tgl_lahir' => 'Tgl Lahir',
            'kelamin' => 'Kelamin',
            'alamat' => 'Alamat',
            'telepon' => 'Telepon',
            'kd_jurusan' => 'Kd Jurusan',
        ];
    }
}
