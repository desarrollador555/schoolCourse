<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Temas */

$this->title = 'Update Temas: ' . $model->id_temas;
$this->params['breadcrumbs'][] = ['label' => 'Temas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_temas, 'url' => ['view', 'id' => $model->id_temas]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="temas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
