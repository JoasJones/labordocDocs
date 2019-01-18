<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\GuiaModel */

$this->title = 'Cadastrar Guia de Solicitação';
$this->params['breadcrumbs'][] = ['label' => 'Guia Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="guia-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
