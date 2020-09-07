<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Temas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="temas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_temas')->textInput() ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'calificacion')->textInput() ?>

    <?= $form->field($model, 'fk_id_materias')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
