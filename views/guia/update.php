<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\GuiaModel */

$this->title = 'Update Guia Model: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Guia Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idGuia, 'url' => ['view', 'id' => $model->idGuia]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="guia-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
