<?php

use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;

$js = <<<EOT

    $('#directores').select2({
        width:'100%'
    });
    
    $("#guionistas").select2({
        width:'100%',
    });
    
    $("#musica").select2({
        width:'100%',
    });

    $("#fotografia").select2({
        width:'100%',
    });
    
    $("#interpretes").select2({
        width:'100%',
    });
    
    $("#productoras").select2({
        width:'100%',
    });

    $("#generos").select2({
        width:'100%',
    });
EOT;
$this->registerJs($js);
?>

<div class="productos-form p-1">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'titulo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'titulo_original')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'anyo')->textInput() ?>

    <?= $form->field($model, 'duracion')->textInput() ?>

    <?= $form->field($model, 'tipo_id')->dropdownList($tipos) ?>

    <?= $form->field($model, 'pais')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sinopsis')->textarea(['rows' => 6]) ?>


    <?= $form->field($model, 'directors')->dropdownList($directores, [
        'id' => 'directores',
        'name' => 'directores',
        'multiple' => 'multiple',
        
        ])->label('Directores', ['for' => 'directores']) ?>


    <?= $form->field($model, 'guions')->dropdownList($guionistas, [
                    'id' => 'guionistas',
                    'name' => 'guionistas',
                    'multiple' => 'multiple',
                    ]) ?>


    <?= $form->field($model, 'musicas')->dropdownList($musica, [
                    'id' => 'musica',
                    'name' => 'musica',
                    'multiple' => 'multiple',
                    ]) ?>


    <?= $form->field($model, 'fotografias')->dropdownList($fotografia, [
                    'id' => 'fotografia',
                    'name' => 'fotografia',
                    'multiple' => 'multiple',
                    ]) ?>

    <?= $form->field($model, 'interpretes')->dropdownList($reparto, [
                    'id' => 'interpretes',
                    'name' => 'interpretes',
                    'multiple' => 'multiple',
                    ]) ?>


    <?= $form->field($model, 'productoras')->dropdownList($productoras, [
                    'id' => 'productoras',
                    'name' => 'productoras',
                    'multiple' => 'multiple',
                    ]) ?>


    <?= $form->field($model, 'generos')->dropdownList($generos, [
                    'id' => 'generos',
                    'name' => 'generos',
                    'multiple' => 'multiple',
                    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>