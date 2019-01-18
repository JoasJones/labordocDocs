<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\GuiaModel */

$this->title = $model->nome;
$this->params['breadcrumbs'][] = ['label' => 'Guia Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="guia-model-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idGuia], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idGuia], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idGuia',
            'numeroGuia',
            'nome',
            'cpf',
            'rg',
            'matricula',
            'idConsulta',
            'endereco',
            'bairro',
            'cidade',
            'idEstado',
            'cep',
            'telefone1',
            'telefone2',
            'email:email',
        ],
    ]) ?>

</div>
