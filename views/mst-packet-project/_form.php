<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MstPacketProject */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mst-packet-project-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_packet_project')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_packet_project')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_date')->textInput() ?>

    <?= $form->field($model, 'modified_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'modified_date')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'kode_lokasi_project')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_map_packet_lokasi')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
