<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "kabupaten".
 *
 * @property string $id_kab
 * @property string $id_prov
 * @property string $name
 *
 * @property Provinsi $prov
 * @property Kecamatan[] $kecamatans
 */
class Kabupaten extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kabupaten';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_kab', 'id_prov', 'name'], 'required'],
            [['id_kab'], 'string', 'max' => 4],
            [['id_prov'], 'string', 'max' => 2],
            [['name'], 'string', 'max' => 255],
            [['id_kab'], 'unique'],
            [['id_prov'], 'exist', 'skipOnError' => true, 'targetClass' => Provinsi::className(), 'targetAttribute' => ['id_prov' => 'id_prov']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_kab' => 'Id Kab',
            'id_prov' => 'Id Prov',
            'name' => 'Name Kabupaten',
        ];
    }

    /**
     * Gets query for [[Prov]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProv()
    {
        return $this->hasOne(Provinsi::className(), ['id_prov' => 'id_prov']);
    }

    /**
     * Gets query for [[Kecamatans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKecamatans()
    {
        return $this->hasMany(Kecamatan::className(), ['id_kab' => 'id_kab']);
    }
}
