<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TrTimbanganSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tr-timbangan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kode_cab') ?>

    <?= $form->field($model, 'no_form') ?>

    <?= $form->field($model, 'no_tr_timbangan') ?>

    <?= $form->field($model, 'no_truck') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?php // echo $form->field($model, 'no_po') ?>

    <?php // echo $form->field($model, 'no_sj') ?>

    <?php // echo $form->field($model, 'nama_supir') ?>

    <?php // echo $form->field($model, 'kode_relasi') ?>

    <?php // echo $form->field($model, 'kode_barang') ?>

    <?php // echo $form->field($model, 'kode_supplier') ?>

    <?php // echo $form->field($model, 'kode_customer') ?>

    <?php // echo $form->field($model, 'kode_barcode') ?>

    <?php // echo $form->field($model, 'in_datetime') ?>

    <?php // echo $form->field($model, 'in_jml_berat') ?>

    <?php // echo $form->field($model, 'in_capture1') ?>

    <?php // echo $form->field($model, 'in_capture2') ?>

    <?php // echo $form->field($model, 'out_datetime') ?>

    <?php // echo $form->field($model, 'out_jml_berat') ?>

    <?php // echo $form->field($model, 'out_capture1') ?>

    <?php // echo $form->field($model, 'out_capture2') ?>

    <?php // echo $form->field($model, 'jml_netton') ?>

    <?php // echo $form->field($model, 'jml_bruto') ?>

    <?php // echo $form->field($model, 'jml_potongan') ?>

    <?php // echo $form->field($model, 'keterangan1') ?>

    <?php // echo $form->field($model, 'keterangan2') ?>

    <?php // echo $form->field($model, 'keterangan3') ?>

    <?php // echo $form->field($model, 'do_scan1') ?>

    <?php // echo $form->field($model, 'do_scan2') ?>

    <?php // echo $form->field($model, 'tr_status') ?>

    <?php // echo $form->field($model, 'is_cancel') ?>

    <?php // echo $form->field($model, 'upd_by') ?>

    <?php // echo $form->field($model, 'cekpembayaran') ?>

    <?php // echo $form->field($model, 'cekpembayaran_upd_by') ?>

    <?php // echo $form->field($model, 'cekpembayaran_upd_dt_tm') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
