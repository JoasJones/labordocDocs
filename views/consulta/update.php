<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ConsultaModel */

$this->title = 'Update Consulta Model: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Consulta Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idConsulta, 'url' => ['view', 'id' => $model->idConsulta]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="consulta-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
