<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TipoDocumentoModel */

$this->title = 'Update Tipo Documento Model: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Tipo Documento Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idTipo, 'url' => ['view', 'id' => $model->idTipo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tipo-documento-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
