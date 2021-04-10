<?php

use yii\bootstrap4\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Productos */

$this->title = 'Dar de alta un producto';
$this->params['breadcrumbs'][] = ['label' => 'Productos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fondo p-2">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'tipos' => $tipos,
        'directores' => $directores,
        'guionistas' => $guionistas,
        'musica' => $musica,
        'fotografia' => $fotografia,
        'reparto' => $reparto,
        'productoras' => $productoras,
        'generos' => $generos, 
    ]) ?>

</div>
