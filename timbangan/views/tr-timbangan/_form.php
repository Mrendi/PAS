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

    
    <?php $form = ActiveForm::begin(['id' => 'form-timbangan']); ?>
    <div class="row">
        <div class="col-md-6">
            <table id="po-purchaseorderdetails" class="table table-condensed">
                
                    <tr>
                        <td> <?= Html::label('Nama Cabang') ?> </td>
                        <td> <?= Html::input('text', 'branch_name', $model->kode_cab, ['class' => 'form-control', 'id' => 'signup-branch-name','readonly' => "true"]) ?> </td>
                        <td></td>
                        <td> <?= Html::label('Tanggal') ?> </td>
                        <td>   <?= $form->field($model, 'tanggal')->textInput(['readonly' => "true"])->label(false) ?> </td>
                    </tr>
                    
                    <tr>
                        <td> <?= Html::label('Nomor Truck') ?> </td>
                        <td> <?= $form->field($model, 'no_truck') ->textInput()->label(false)?> </td>
                        <td> <?= Html::img('../web/img/find.png', ['value' => Url::to('index.php?r=timbangan/tr-timbangan/lookuptruck'),'alt'=>'lookuptruck', 'title' => 'Lookup Truck','class' => 'showModalButton','id'=>'modalButton']);?>  </td>
                         <td> <?= Html::label('Nama Sopir') ?> </td>
                         <td> <?= $form->field($model, 'nama_supir')  ->textInput()->label(false) ?>    </td>
                       
                    </tr>
                    
                    <tr>
                        <td> <?= Html::label('Status') ?> </td>
                        <td>  <select id="inputState" class="form-control">
                            <option selected>Masuk</option>
                            <option>Keluar</option>
                            </select>     </td>
                        <td></td>
                         <td>  </td>
                        <td>    </td>
                    </tr>
            </table>
        </div>
        <div class="col-md-6">
            <table id="po-purchaseorderdetails" class="table table-condensed">
                <tr>
                        <td> <?= Html::label('No. PO') ?> </td>
                        <td> <?= $form->field($model, 'no_po') ->textInput()->label(false)?> 
                        </td>
                        <td><?= Html::img('../web/img/find.png', ['value' => Url::to('index.php?r=po/purchaseorder/lookuppo'),'alt'=>'lookuppo', 'title' => 'Lookup PO','class' => 'showModalButton','id'=>'modalButton']);?>  </td>
                        <td> <?= Html::label('No. DO') ?> </td>
                        <td>  <?= $form->field($model, 'no_sj') ->textInput()->label(false)?>
                    </tr>
                    
                     <tr>
                        <td> <?= Html::label('Supplier') ?> </td>
                        <td>   
                             <?= $form->field($model, 'kode_supplier')->textInput(['maxlength' => true])->label(false) ?>  
                        </td>
                        <td>  </td>
                        <td> <?= Html::label('Nama Barang') ?> </td>
                        <td> <?= $form->field($model, 'kode_barang')  ->textInput()->label(false)?>   </td>
                        <td> </td>
                    </tr>
                    
                    <tr>
                        <td> <?= Html::label('Customer') ?> </td>
                        <td> <?= $form->field($model, 'kode_customer')->textInput(['maxlength' => true])->label(false ) ?>  </td>
                       <td> </td>
                        <td><?= Html::label('Proyek') ?> </td>
                        <td> <?= $form->field($model, 'kode_supplier')->textInput(['maxlength' => true])->label(false) ?>  </td>
                        <td> </td>
                    </tr>
            </table>
            
        </div>
                    
          <div class="col-md-12">
            <table id="po-purchaseorderdetails" class="table table-condensed">
                <h4><b>Menimbang Truck</b></h4><br>
                    <tr>
                        <td> <?= Html::label('Jumlah berat 1') ?> </td>
                        <td>  <?= $form->field($model, 'in_jml_berat') ->textInput(['readonly' => "true"])->label(false)?>
            
                        </td>
                        <td><?= Html::img('../web/img/find.png', ['value' => Url::to(''),'alt'=>'jumlah_berat_in','onclick' => "javascript:getBeratIn();"]);?> </td>
                        
                        
                    </tr>
                    
                     <tr>
                        <td> <?= Html::label('Jumlah berat 2') ?> </td>
                        <td> <?= $form->field($model, 'out_jml_berat') ->textInput(['readonly' => "true"])->label(false)?></td>
                        <td><?= Html::img('../web/img/find.png', ['value' => Url::to(''),'alt'=>'jumlah_berat_out','onclick' => "javascript:getBeratOut();"]);?> </td>
                        
                        <td> <?= Html::label('Keterangan 1') ?> </td>
                        <td>  <?= $form->field($model, 'keterangan1')  ->textInput()->label(false) ?>
             
           
                        </td>
                       
                    </tr>
                    
                    <tr>
                        <td> <?= Html::label('Juml. Bruto') ?> </td>
                        <td>  <?= $form->field($model, 'jml_bruto') ->textInput()->label(false)?>
              <td></td>
                       
                        <td><?= Html::label('Keterangan 2') ?> </td>
                       <td> <?= $form->field($model, 'keterangan2')  ->textInput()->label(false)?></td>  </td>
                        <td> 
             
           
                        </td>
                        <td></td>
                    </tr>
                    
                    <tr>
                         <td> <?= Html::label('Juml. Potongan') ?> </td>
                        <td>  <?= $form->field($model, 'jml_potongan') ->textInput()->label(false)?>
                        <td></td>
                        
                        <td>  </td>
                        <td>  
                        <td></td>
                    </tr>
                    
                     <tr>
                         <td> <?= Html::label('Juml. Netton') ?> </td>
                        <td>  <?= $form->field($model, 'jml_netton') ->textInput()->label(false)?> </td>
                        <td></td>
                        
                        <td>  </td>
                        <td>  
                        <td></td>
                    </tr>
            </table>
          </div>
            
           <?= $form->field($model, 'kode_cab') ->textInput(['value' => Yii::$app->user->getBranchCode()])->hiddenInput()->label(false)?>
           <?= $form->field($model, 'no_tr_timbangan')->hiddenInput()->label(false)?>
        </div>
      </div>
    <?= Html::submitButton($model->isNewRecord ? 'Print' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
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
                var text = '{"dsr":"false","ring":"false","ctr":"false","data":"10000"}';
                var obj = JSON.parse(text);
                //obj.birth = new Date(obj.birth);
                if (obj.data < 0) {
                    obj.data = "0";
                }
                
                document.getElementById("trtimbangan-in_jml_berat").value = obj.data ;

            }
            
             function getBeratOut(){
                var text = '{"dsr":"false","ring":"false","ctr":"false","data":"40000"}';
                var obj = JSON.parse(text);
                //obj.birth = new Date(obj.birth);
                if (obj.data < 0) {
                    obj.data = "0";
                }
                document.getElementById("trtimbangan-out_jml_berat").value = obj.data ;
                
                var firstValue  = Math.abs(document.getElementById('trtimbangan-in_jml_berat').value);   // get value of field
                var secondValue = Math.abs(document.getElementById('trtimbangan-out_jml_berat').value);  // co
                $('#trtimbangan-jml_bruto').html(firstValue - secondValue); // add them and output it
                document.getElementById('trtimbangan-jml_bruto').value = Math.abs(firstValue - secondValue) ;
                
                //var jmlPotonganValue = Math.abs(document.getElementById('trtimbangan-jml_potongan').value); 
                
                document.getElementById('trtimbangan-jml_netton').value = Math.abs(firstValue - secondValue) ;
            }
            
            document.getElementById("trtimbangan-jml_potongan").addEventListener("keyup", calcNetton);
            function calcNetton() {
                var jmlBruto = Math.abs(document.getElementById("trtimbangan-jml_bruto").value);
                 var jmlPotongan = Math.abs(document.getElementById('trtimbangan-jml_potongan').value);
                 
                 document.getElementById('trtimbangan-jml_netton').value = Math.abs(jmlBruto - jmlPotongan)
            }
            
           // $('trtimbangan-jml_potongan').keyup(function(){ 
           //         var firstValue  = document.getElementById('trtimbangan-in_jml_berat').value;   // get value of field
           //         var secondValue = document.getElementById('trtimbangan-out_jml_berat').value; // co
           //         $('#trtimbangan-jml_bruto').html(firstValue + secondValue ); // add them and output it
           //         document.getElementById('trtimbangan-jml_bruto').value = firstValue + secondValue ;
                    
           // });
            
            
            function getBeratFix(){
            $.getJSON('http://time.jsontest.com', function(data) {
            document.getElementById("trtimbangan-in_jml_berat").value = data.time ;
            
            });
        }
        </script> 
        
      