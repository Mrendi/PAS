<?php


use app\po\models\PurchaseOrderDetail;
use yii\helpers\Html;
use yii\bootstrap\Modal;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\po\models\PurchaseOrder */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="purchase-order-form">

    <?php $form = ActiveForm::begin([
        'enableClientValidation' => false,
    ]); ?>
   
     <?= $model->errorSummary($form); ?>
    
     <fieldset>
       <legend>Purchase Order</legend>
       
        <div class="row">
            <div class="col-md-5">
                <?= $form->field($model->purchaseorder, 'po_number')->textInput(['maxlength' => true]) ?>
                <?= $form->field($model->purchaseorder, 'wo_number')->textInput(['maxlength' => true]) ?>
                <?= $form->field($model->purchaseorder, 'supplier_code')->textInput(['maxlength' => true]) ?> 
                <?= $form->field($model->purchaseorder, 'shipment_method')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-1">
                <br><br><br><br><br><br><br><br><br>
                <?= Html::img('../web/img/find.png', ['value' => Url::to('index.php?r=material/mst-supplier/lookupsupplier'),'alt'=>'lookupsupplier', 'title' => 'Lookup Supplier','class' => 'showModalButton','id'=>'modalButton']);?> 
            </div>
            
            <div class="col-md-6">
                 <?= $form->field($model->purchaseorder , 'po_date')->textInput(['value' => date("d-m-Y"), 'readonly' => "true"])->label('Tanggal') ?>
                <?= $form->field($model->purchaseorder, 'sales_name')->textInput(['maxlength' => true]) ?>
                <?= $form->field($model->purchaseorder, 'payment_method')->textInput(['maxlength' => true]) ?>
                <?= $form->field($model->purchaseorder, 'shipment_date')->textInput(['maxlength' => true]) ?>
            </div>
        </div>
      
    </fieldset>
    
    <br><br>
    
     <fieldset>
        <legend>Purchase Order Detail
            <?php
            // new parcel button
            echo Html::a('New Purchase Order Detail', 'javascript:void(0);', [
              'id' => 'po-new-purchaseorderdetail-button', 
              'class' => 'pull-right btn btn-default btn-xs'
            ])
            ?>
        </legend>
        <?php
        
        // parcel table
        $purchaseorderdetail = new PurchaseOrderDetail();
        $purchaseorderdetail->loadDefaultValues();
        echo '<table id="po-purchaseorderdetails" class="table table-condensed table-bordered">';
        echo '<thead>';
        echo '<tr>';
        echo '<th>' . $purchaseorderdetail->getAttributeLabel('kode_item') . '</th>';
        echo '<th></th>';
        echo '<th>' . $purchaseorderdetail->getAttributeLabel('jumlah_item') . '</th>';
        echo '<th>' . $purchaseorderdetail->getAttributeLabel('kode_stock') . '</th>';
        echo '<th>' . $purchaseorderdetail->getAttributeLabel('harga_per_satuan_unit') . '</th>';
        echo '<th>' . $purchaseorderdetail->getAttributeLabel('total_harga_per_satuan_unit') . '</th>';
        echo '<td>&nbsp;</td>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        
        // existing parcels fields
        foreach ($model->purchaseorderdetails as $key => $_purchaseorderdetail) {
          echo '<tr>';
          echo $this->render('_form-po-podetail', [
            'key' => $_purchaseorderdetail->isNewRecord ? (strpos($key, 'new') !== false ? $key : 'new' . $key) : $_purchaseorderdetail->id,
            'form' => $form,
            'purchaseorderdetail' => $_purchaseorderdetail,
          ]);
          echo '</tr>';
        }
        
        // new parcel fields
        echo '<tr id="po-new-purchaseorderdetail-block" style="display: none;">';
        echo $this->render('_form-po-podetail', [
            'key' => '__id__',
            'form' => $form,
            'purchaseorderdetail' => $purchaseorderdetail,
        ]);
        echo '</tr>';
        echo '</tbody>';
        echo '</table>';
        
        // OPTIONAL: register JS assets as required for widgets
       
        ?>

        <?php ob_start(); // output buffer the javascript to register later ?>
        <script>
            
            // add parcel button
            var podetail_k = <?php echo isset($key) ? str_replace('new', '', $key) : 0; ?>;
            $('#po-new-purchaseorderdetail-button').on('click', function () {
                podetail_k += 1;
                $('#po-purchaseorderdetails').find('tbody')
                  .append('<tr>' + $('#po-new-purchaseorderdetail-block').html().replace(/__id__/g, 'new' + podetail_k) + '</tr>');
                
               
                
               

                // OPTIONAL: autocomplete on copied row
              
                
            });
            
            // remove parcel button
            $(document).on('click', '.po-remove-purchaseorderdetail-button', function () {
                $(this).closest('tbody tr').remove();
            });
            
            <?php
            // OPTIONAL: click add when the form first loads to display the first new row
            if (!Yii::$app->request->isPost && $model->purchaseorder->isNewRecord) 
              echo "$('#po-new-purchaseorderdetail-button').click();";
            ?>
            
           
            
           

        </script>
        <?php $this->registerJs(str_replace(['<script>', '</script>'], '', ob_get_clean())); ?>

    </fieldset>


    
       
    
    <?= Html::submitButton('Save'); ?>
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