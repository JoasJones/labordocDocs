<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\GuiaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Guia de Solicitação';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="guia-model-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Cadastrar Usuário', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'idGuia',
            'numeroGuia',
            'nome',
            'cpf',
            'rg',
            'matricula',
            //'idConsulta',
            //'endereco',
            //'bairro',
            //'cidade',
            //'idEstado',
            //'cep',
            //'telefone1',
            //'telefone2',
            //'email:email',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
