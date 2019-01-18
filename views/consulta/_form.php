<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\FundoModel;

/* @var $this yii\web\View */
/* @var $model app\models\ConsultaModel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="consulta-model-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'caixa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'data')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipoDeDocumento')->textInput(['maxlength' => true]) ?>
    
     <?= $form->field($model, 'idFundo')->dropDownList(ArrayHelper::map(FundoModel::find()->all(),'idFundo','fundo_nome')) ?>


    <!--?= $form->field($model, 'tipoDeDocumento')->dropDownList(ArrayHelper::map()) ?-->

    <?= $form->field($model, 'titulares')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descricao')->textarea(['maxlength' => true]) ?>

    <?= $form->field($model, 'documento')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Salvar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
