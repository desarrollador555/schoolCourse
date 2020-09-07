<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\AlumnosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Alumnos';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="alumnos-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Alumnos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <a href="">as</a>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

                'id_alumno',
                'nombre',
                'descripcion:ntext',
                'creditos_totales',
            ['class' => 'yii\grid\ActionColumn'],
            
        ],
    ]); ?>


</div>
