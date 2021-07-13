<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "desa".
 *
 * @property string $id_desa
 * @property string $id_kec
 * @property string $name
 *
 * @property Kecamatan $kec
 */
class Desa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'desa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_desa', 'id_kec', 'name'], 'required'],
            [['id_desa'], 'string', 'max' => 10],
            [['id_kec'], 'string', 'max' => 7],
            [['name'], 'string', 'max' => 255],
            [['id_desa'], 'unique'],
            [['id_kec'], 'exist', 'skipOnError' => true, 'targetClass' => Kecamatan::className(), 'targetAttribute' => ['id_kec' => 'id_kec']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_desa' => 'Id Desa',
            'id_kec' => 'Id Kec',
            'name' => 'Name Desa',
        ];
    }

    /**
     * Gets query for [[Kec]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKec()
    {
        return $this->hasOne(Kecamatan::className(), ['id_kec' => 'id_kec']);
    }
}
