<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "estatus".
 *
 * @property int $id_estatus
 * @property string $nombre
 *
 * @property AlumnosMaterias[] $alumnosMaterias
 */
class Estatus extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'estatus';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre'], 'required'],
            [['nombre'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_estatus' => 'Id Estatus',
            'nombre' => 'Nombre',
        ];
    }

    /**
     * Gets query for [[AlumnosMaterias]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAlumnosMaterias()
    {
        return $this->hasMany(AlumnosMaterias::className(), ['fk_estatus' => 'id_estatus']);
    }
}
