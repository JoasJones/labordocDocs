<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\ArrayHelper;
use app\models\FundoModel;

/* @var $this yii\web\View */
/* @var $model app\models\ConsultaModel */

$this->title = $model->titulares;
$this->params['breadcrumbs'][] = ['label' => 'Consulta Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="consulta-model-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Alterar', ['update', 'id' => $model->idConsulta], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Apagar', ['delete', 'id' => $model->idConsulta], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        
        <?= Html::a('Download', ['download', 'id' => $model->idConsulta], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
           // 'idConsulta',
            'model'=> 'idFundo',
            'caixa',
            'data',
            'tipoDeDocumento',
            'titulares',
            'descricao',
            'documento',
        ],
    ]) ?>

</div>
