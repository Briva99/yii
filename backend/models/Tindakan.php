<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tindakan".
 *
 * @property int $id_tindakan
 * @property string $jenis_tindakan
 * @property int $harga
 */
class Tindakan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tindakan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_tindakan', 'jenis_tindakan', 'harga'], 'required'],
            [['id_tindakan', 'harga'], 'integer'],
            [['jenis_tindakan'], 'string'],
            [['id_tindakan'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_tindakan' => 'Id Tindakan',
            'jenis_tindakan' => 'Jenis Tindakan',
            'harga' => 'Harga',
        ];
    }
}
