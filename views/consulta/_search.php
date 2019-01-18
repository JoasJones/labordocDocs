<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ConsultaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="consulta-model-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idConsulta') ?>

    <?= $form->field($model, 'caixa') ?>

    <?= $form->field($model, 'data') ?>

    <?= $form->field($model, 'tipoDeDocumento') ?>

    <?= $form->field($model, 'titulares') ?>

    <?php // echo $form->field($model, 'descricao') ?>

    <?php // echo $form->field($model, 'documento') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
