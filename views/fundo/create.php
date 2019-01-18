<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\FundoModel */

$this->title = 'Create Fundo Model';
$this->params['breadcrumbs'][] = ['label' => 'Fundo Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fundo-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
