<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TrTimbangan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tr-timbangan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_cab')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_form')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_tr_timbangan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_truck')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'no_po')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_sj')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_supir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_relasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_barang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_supplier')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_customer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_barcode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'in_datetime')->textInput() ?>

    <?= $form->field($model, 'in_jml_berat')->textInput() ?>

    <?= $form->field($model, 'in_capture1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'in_capture2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'out_datetime')->textInput() ?>

    <?= $form->field($model, 'out_jml_berat')->textInput() ?>

    <?= $form->field($model, 'out_capture1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'out_capture2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jml_netton')->textInput() ?>

    <?= $form->field($model, 'jml_bruto')->textInput() ?>

    <?= $form->field($model, 'jml_potongan')->textInput() ?>

    <?= $form->field($model, 'keterangan1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keterangan2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keterangan3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'do_scan1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'do_scan2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tr_status')->textInput() ?>

    <?= $form->field($model, 'is_cancel')->textInput() ?>

    <?= $form->field($model, 'upd_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cekpembayaran')->textInput() ?>

    <?= $form->field($model, 'cekpembayaran_upd_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cekpembayaran_upd_dt_tm')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
