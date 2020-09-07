<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "temas".
 *
 * @property int $id_temas
 * @property string $nombre
 * @property string $descripcion
 * @property int $calificacion
 * @property int $fk_id_materias
 *
 * @property Actividades[] $actividades
 * @property Materias $fkIdMaterias
 */
class Temas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'temas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_temas', 'nombre', 'descripcion', 'calificacion', 'fk_id_materias'], 'required'],
            [['id_temas', 'calificacion', 'fk_id_materias'], 'integer'],
            [['nombre'], 'string', 'max' => 20],
            [['descripcion'], 'string', 'max' => 200],
            [['id_temas'], 'unique'],
            [['fk_id_materias'], 'exist', 'skipOnError' => true, 'targetClass' => Materias::className(), 'targetAttribute' => ['fk_id_materias' => 'id_materias']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_temas' => 'Id Temas',
            'nombre' => 'Nombre',
            'descripcion' => 'Descripcion',
            'calificacion' => 'Calificacion',
            'fk_id_materias' => 'Fk Id Materias',
        ];
    }

    /**
     * Gets query for [[Actividades]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getActividades()
    {
        return $this->hasMany(Actividades::className(), ['fk_id_temas' => 'id_temas']);
    }

    /**
     * Gets query for [[FkIdMaterias]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFkIdMaterias()
    {
        return $this->hasOne(Materias::className(), ['id_materias' => 'fk_id_materias']);
    }
}
