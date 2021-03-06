<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "provinsi".
 *
 * @property string $id_prov
 * @property string $name
 *
 * @property Kabupaten[] $kabupatens
 */
class Provinsi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'provinsi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_prov', 'name'], 'required'],
            [['id_prov'], 'string', 'max' => 2],
            [['name'], 'string', 'max' => 255],
            [['id_prov'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_prov' => 'Id Prov',
            'name' => 'Name Provinsi',
        ];
    }

    /**
     * Gets query for [[Kabupatens]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKabupatens()
    {
        return $this->hasMany(Kabupaten::className(), ['id_prov' => 'id_prov']);
    }
}
