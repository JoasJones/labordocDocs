<?php

use app\models\FundoModel;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\ConsultaModel;

/* @var $this yii\web\View */
/* @var $model app\models\GuiaModel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="guia-model-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'numeroGuia')->textInput() ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cpf')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'matricula')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'idFundo')->dropDownList(ArrayHelper::map(FundoModel::find()->all(),'idFundo','fundo_nome')) ?>
    
     <!--  ?= $form->field($model, 'idConsulta')->dropDownList(ArrayHelper::map(ConsultaModel::find()->all(),'idConsulta','titulares')) ?-->

    < ?= $form->field($model, 'idConsulta')->textInput() ?>

    <?= $form->field($model, 'endereco')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bairro')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cidade')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idEstado')->textInput() ?>

    <?= $form->field($model, 'cep')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefone1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefone2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Salvar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
