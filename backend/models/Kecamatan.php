<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "kecamatan".
 *
 * @property string $id_kec
 * @property string $id_kab
 * @property string $name
 *
 * @property Desa[] $desas
 * @property Kabupaten $kab
 */
class Kecamatan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kecamatan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_kec', 'id_kab', 'name'], 'required'],
            [['id_kec'], 'string', 'max' => 7],
            [['id_kab'], 'string', 'max' => 4],
            [['name'], 'string', 'max' => 255],
            [['id_kec'], 'unique'],
            [['id_kab'], 'exist', 'skipOnError' => true, 'targetClass' => Kabupaten::className(), 'targetAttribute' => ['id_kab' => 'id_kab']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_kec' => 'Id Kec',
            'id_kab' => 'Id Kab',
            'name' => 'Name Kecamatan',
        ];
    }

    /**
     * Gets query for [[Desas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDesas()
    {
        return $this->hasMany(Desa::className(), ['id_kec' => 'id_kec']);
    }

    /**
     * Gets query for [[Kab]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKab()
    {
        return $this->hasOne(Kabupaten::className(), ['id_kab' => 'id_kab']);
    }
}
