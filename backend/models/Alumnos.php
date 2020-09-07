<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "alumnos".
 *
 * @property int $id_alumno
 * @property string $nombre
 * @property string $descripcion
 * @property int|null $creditos_totales
 *
 * @property AlumnosMaterias[] $alumnosMaterias
 */
class Alumnos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'alumnos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            
            [['nombre', 'descripcion'], 'required'],
            [['descripcion'], 'string'],
            [['creditos_totales'], 'integer'],
            [['nombre'], 'string', 'max' => 200],
            
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_alumno' => 'Id Alumno',
            'nombre' => 'Nombre',
            'descripcion' => 'Descripcion',
            'creditos_totales' => 'Creditos Totales',
        ];
    }

    /**
     * Gets query for [[AlumnosMaterias]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAlumnosMaterias()
    {
        return $this->hasMany(AlumnosMaterias::className(), ['fk_id_alumno' => 'id_alumno']);
    }
}
