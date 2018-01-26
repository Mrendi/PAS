<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\bootstrap\Modal;
/* @var $this yii\web\View */
/* @var $model app\timbangan\models\TrTimbangan */
/* @var $form yii\widgets\ActiveForm */

?>


 <?php $form = ActiveForm::begin(['id' => 'form-timbangan']); ?>
<div class="col-md-5">
    <form class="form-inline">
        <table>
            <tr>
                
                <td><label for="branchName">Nama Cabang</label></td> <td>:</td>
                <td><?= Html::input('text', 'branch_name', $model->kode_cab, ['class' => 'form-md', 'id' => 'signup-branch-name','readonly' => "true"]) ?><br>
                </td>
                <td>
                
                </td>
                  
            </tr>
            <br>
             <tr>
                  
                <td><label for="noTruck">Nomor Truk</label></td> <td>:</td>
                <td><?= $form->field($model, 'no_truck') ->textInput()->label(false)?>
                </td>
                 <td>
                <?= Html::img('../web/img/find.png', ['value' => Url::to('index.php?r=timbangan/tr-timbangan/lookuptruck'),'alt'=>'lookuptruck', 'title' => 'Lookup Truck','class' => 'showModalButton','id'=>'modalButton']);?> 
                </td>
                  
            </tr>
            
            <tr>
                  
                <td><label for="date">Tanggal</label></td> <td>:</td>
                <td><?= $form->field($model, 'tanggal')->textInput(['readonly' => "true"])->label(false) ?>
                </td>
                  
            </tr>
            
            <tr>
                  
                <td><label for="state">Status</label></td> <td>:</td>
                <td>
                    <select id="inputState" class="form-control">
                        <option selected>Masuk</option>
                        <option>Keluar</option>
                    </select><br>
                </td>
                  
            </tr>
            
             <tr>
                  
                <td><label for="noPO">Nomor PO</label></td> <td>:</td>
                <td>
                   <?= $form->field($model, 'no_po') ->textInput()->label(false)?>
                </td>
                  
            </tr>
            
             <tr>
                  
                <td><label for="noDO">Nomor DO</label></td> <td>:</td>
                <td>
                   <?= $form->field($model, 'no_sj')->textInput()->label(false) ?>
                </td>
                  
            </tr>
        </table>
</form>
</div>     

    <div class="row">
        <div class="col-md-5">
            <form class="form-inline">
                <table>
               <tr>
                  
                <td><label for="namaSopir">Nama Sopir</label></td> <td>:</td>
                <td><?= $form->field($model, 'nama_supir')  ->textInput()->label(false) ?>
                </td>
                  
            </tr>
            
             <tr>
                  
                <td><label for="namaBarang">Nama Sopir</label></td> <td>:</td>
                <td><?= $form->field($model, 'nama_supir')  ->textInput()->label(false) ?>
                </td>
                  
            </tr>
            
            
                </table></form>
             
            
            
          
            
            <br>
            
            
          
       </div>
        </div>
         <div class="col-md-1">
             <br><br><br><br><br><br>
            
             <br><br><br><br><br><br><br><br><br><br><br>
             <?= Html::img('../web/img/find.png', ['value' => Url::to('index.php?r=master/mst-cabang/lookupbranch'),'alt'=>'lookupbranch', 'title' => 'Lookup Purchase Order','class' => 'showModalButton','id'=>'modalButton']);?> 
             <br><br><br><br>
             <?= Html::img('../web/img/find.png', ['value' => Url::to('index.php?r=master/mst-cabang/lookupbranch'),'alt'=>'lookupbranch', 'title' => 'Lookup Delivey Order','class' => 'showModalButton','id'=>'modalButton']);?> 
       </div>
        <div class="col-md-5">
            <?= $form->field($model, 'nama_supir')  ->textInput()->label('Nama Sopir') ?>
            <?= $form->field($model, 'kode_barang')  ->textInput()->label('Nama Barang')?>
             <?= $form->field($model, 'kode_supplier')->textInput(['maxlength' => true])->label('Supplier') ?>
            <?= $form->field($model, 'kode_customer')->textInput(['maxlength' => true])->label('Customer') ?>
            <?= $form->field($model, 'kode_supplier')->textInput(['maxlength' => true])->label('Proyek') ?>
              
       </div>
         <div class="col-md-1">
            <br><br><br><br><br>
            <?= Html::img('../web/img/find.png', ['value' => Url::to('index.php?r=master/mst-cabang/lookupbranch'),'alt'=>'lookupbranch', 'title' => 'Lookup Customer', 'class' => 'showModalButton','id'=>'modalButton']);?> 
            
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
          
       </div>
        <div class="col-md-6">
            
            <?= $form->field($model, 'keterangan1')  ->textInput()->label('keterangan 1') ?>
            <?= $form->field($model, 'keterangan2')  ->textInput()->label('keterangan 2')?>
              
       </div>
    </div>
    <br><br>
   <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'jml_bruto') ->textInput()->label('Juml. Bruto')?>
            <?= $form->field($model, 'jml_potongan') ->textInput()->label('Juml. Potongan')?>
          
       </div>
      
    </div>
    <br>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'jml_netton') ->textInput()->label('Juml. Netton')?>
            
          
       </div>
       
    </div>
   

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Print' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        
    </div>

    <?php ActiveForm::end(); ?>


 <?php
        Modal::begin([
        'headerOptions' => ['id' => 'modalHeader'],
        'id' => 'modal',
        'size' => 'modal-lg',
        ]); 

        echo "<div id='modalContent'><div>";
        Modal::end()
    ?>
