<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\FundoModel */

$this->title = 'Update Fundo Model: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Fundo Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idFundo, 'url' => ['view', 'id' => $model->idFundo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="fundo-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
