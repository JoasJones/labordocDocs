<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\FundoModel */

$this->title = $model->idFundo;
$this->params['breadcrumbs'][] = ['label' => 'Fundo Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fundo-model-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idFundo], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idFundo], [
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
            'idFundo',
            'fundo_nome',
        ],
    ]) ?>

</div>
