<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\bootstrap\Modal;
/* @var $this yii\web\View */
/* @var $model app\timbangan\models\TrTimbangan */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="form-group">

    

    <div class="row">
        <div class="col-md-5">
           <?php $form = ActiveForm::begin(['id' => 'form-timbangan']); ?>
           <?= $form->field($model, 'kode_cab') ->textInput(['value' => Yii::$app->user->getBranchCode()])->hiddenInput()->label(false)?>
            <?= $form->field($model, 'no_tr_timbangan')->hiddenInput()->label(false)?>
             <?= Html::label('Nama Cabang') ?><br>
            <?= Html::input('text', 'branch_name', $model->kode_cab, ['class' => 'form-control', 'id' => 'signup-branch-name','readonly' => "true"]) ?><br>
            <?= $form->field($model, 'no_truck') ->textInput()->label('Nomor Truck')?>
            <?= $form->field($model, 'tanggal')->textInput(['readonly' => "true"])->label('Tanggal') ?>
          
            <label for="inputState">State</label> 
           <select id="inputState" class="form-control">
                <option selected>Masuk</option>
                <option>Keluar</option>
           </select>
            <br>
            <?= $form->field($model, 'no_po') ->textInput()->label('Nomor PO')?>
            <?= $form->field($model, 'no_sj')->textInput()->label('Nomor DO') ?>
          
       </div>
         <div class="col-md-1">
             <br><br><br><br><br><br>
            <?= Html::img('../web/img/find.png', ['value' => Url::to('index.php?r=timbangan/tr-timbangan/lookuptruck'),'alt'=>'lookuptruck', 'title' => 'Lookup Truck','class' => 'showModalButton','id'=>'modalButton']);?> 
             <br><br><br><br><br><br><br><br><br><br><br>
             <?= Html::img('../web/img/find.png', ['value' => Url::to('index.php?r=material/mst-type-item/lookupitem'),'alt'=>'lookupitem', 'title' => 'Lookup Item','class' => 'showModalButton','id'=>'modalButton']);?> 
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
            <?= Html::img('../web/img/find.png', ['value' => Url::to('index.php?r=material/mst-type-item/lookupitem'),'alt'=>'lookupitem', 'title' => 'Lookup Item','class' => 'showModalButton','id'=>'modalButton']);?> 
            
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
        <div class="col-md-5">
            <?= $form->field($model, 'in_jml_berat') ->textInput(['readonly' => "true"])->label('Jumlah Berat 1')?>
            <?= $form->field($model, 'out_jml_berat') ->textInput(['readonly' => "true"])->label('Jumlah Berat 2')?>
          
       </div>
          <div class="col-md-1">
             <br>
            <?= Html::img('../web/img/find.png', ['value' => Url::to(''),'alt'=>'jumlah_berat_in','onclick' => "javascript:getBeratIn();"]);?> 
             <br><br><br><br>
             <?= Html::img('../web/img/find.png', ['value' => Url::to(''),'alt'=>'jumlah_berat_out','onclick' => "javascript:getBeratOut();"]);?> 
             
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

</div>
 <?php
        Modal::begin([
        'headerOptions' => ['id' => 'modalHeader'],
        'id' => 'modal',
        'size' => 'modal-lg',
        ]); 

        echo "<div id='modalContent'><div>";
        Modal::end()
    ?>
        <script type="text/javascript">
 
            //function machinefunction(){
            //  get data
            //  var nubb =  'http://localhost:8080/nikitabrigde/serialport/?com=COM1&setting=2400%2C7%2C1%2C1&prefix=%7B%22char%22%3A%22hex%22%2C%22prefix%22%3A%220D+0A+77+77%22%2C%22suffix%22%3A%2220+6B+67%22%7D&mode=1s&data=&_=1515087520969'; // document.getElementById("modalButton").value;

            //}
            
            function getBeratIn(){
                var text = '{"dsr":"false","ring":"false","ctr":"false","data":"042080"}';
                var obj = JSON.parse(text);
                //obj.birth = new Date(obj.birth);
                if (obj.data < 0) {
                    obj.data = "0";
                }
                
                document.getElementById("trtimbangan-in_jml_berat").value = obj.data ;

            }
            
             function getBeratOut(){
                var text = '{"dsr":"false","ring":"false","ctr":"false","data":"-10000"}';
                var obj = JSON.parse(text);
                //obj.birth = new Date(obj.birth);
                if (obj.data < 0) {
                    obj.data = "0";
                }
                document.getElementById("trtimbangan-out_jml_berat").value = obj.data ;
                
            }
            
            function getBeratFix(){
            $.getJSON('http://time.jsontest.com', function(data) {
            document.getElementById("trtimbangan-in_jml_berat").value = data.time ;
            });
        }
        </script> 
        
      