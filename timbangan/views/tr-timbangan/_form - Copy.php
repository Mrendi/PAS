<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\timbangan\models\TrTimbangan */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="tr-timbangan-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'kode_cab') ->textInput()->label('Nama Cabang')?>
            <?= $form->field($model, 'no_truck') ->textInput()->label('Nomor Truck')?>
            <?= $form->field($model, 'tanggal')->textInput()->label('Tanggal') ?>
          
            <label for="inputState">State</label> 
           <select id="inputState" class="form-control">
                <option selected>Masuk</option>
                <option>Keluar</option>
           </select>
           
           
            <?= $form->field($model, 'no_po') ->textInput()->label('Nomor PO')?>
            <?= $form->field($model, 'no_sj')->textInput()->label('Nomor DO') ?>
          
       </div>
        <div class="col-md-6">
            <?= $form->field($model, 'nama_supir')  ->textInput()->label('Nama Sopir') ?>
            <?= $form->field($model, 'kode_barang')  ->textInput()->label('Nama Barang')?>
             <?= $form->field($model, 'kode_supplier')->textInput(['maxlength' => true])->label('Supplier') ?>
            <?= $form->field($model, 'kode_customer')->textInput(['maxlength' => true])->label('Customer') ?>
            <?= $form->field($model, 'kode_supplier')->textInput(['maxlength' => true])->label('Proyek') ?>
              
       </div>
    </div>
    
    <br>
    
     <div class="row">
          <div class="col-md-6">
    <?= "Menimbang Truck" ?>
          </div>
    
          <div class="col-md-6">
    <?= "Keterangan" ?>
          </div>
     </div>
    
    <br><br>
   
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'in_jml_berat') ->textInput()->label('Jumlah Berat 1')?>
            <?= $form->field($model, 'out_jml_berat') ->textInput()->label('Jumlah Berat 2')?>
            <?= $form->field($model, 'tanggal')->textInput()->label('Tanggal') ?>
            <?= $form->field($model, 'no_po') ->textInput()->label('Nomor PO')?>
            <?= $form->field($model, 'no_sj')->textInput()->label('Nomor DO') ?>
          
       </div>
        <div class="col-md-6">
            
            <?= $form->field($model, 'nama_supir')  ->textInput()->label('Nama Sopir') ?>
            <?= $form->field($model, 'kode_barang')  ->textInput()->label('Nama Barang')?>
             <?= $form->field($model, 'kode_supplier')->textInput(['maxlength' => true])->label('Supplier') ?>
            <?= $form->field($model, 'kode_customer')->textInput(['maxlength' => true])->label('Customer') ?>
            <?= $form->field($model, 'kode_supplier')->textInput(['maxlength' => true])->label('Proyek') ?>
              
       </div>
    </div>
    
   
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
