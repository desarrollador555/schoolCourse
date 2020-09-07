<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "materias".
 *
 * @property int $id_materias
 * @property string $nombre
 * @property string $descripcion
 * @property int|null $calificacion
 * @property int $creditos
 *
 * @property AlumnosMaterias[] $alumnosMaterias
 * @property Temas[] $temas
 */
class Materias extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'materias';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'descripcion', 'creditos'], 'required'],
            [['descripcion'], 'string'],
            [['calificacion', 'creditos'], 'integer'],
            [['nombre'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_materias' => 'Id Materias',
            'nombre' => 'Nombre',
            'descripcion' => 'Descripcion',
            'calificacion' => 'Calificacion',
            'creditos' => 'Creditos',
        ];
    }

    /**
     * Gets query for [[AlumnosMaterias]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAlumnosMaterias()
    {
        return $this->hasMany(AlumnosMaterias::className(), ['fk_id_materia' => 'id_materias']);
    }

    /**
     * Gets query for [[Temas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTemas()
    {
        return $this->hasMany(Temas::className(), ['fk_id_materias' => 'id_materias']);
    }
}
