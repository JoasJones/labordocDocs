<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ConsultaModel */

$this->title = 'Cadastrar Consulta';
$this->params['breadcrumbs'][] = ['label' => 'Consulta Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="consulta-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
