<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\material\models\MstLokasiItem */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mst-lokasi-item-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_lokasi_item')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_lokasi_item')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
