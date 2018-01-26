<?php


use app\pocust\models\Purchaseordercustomerdetail;
use yii\helpers\Html;
use yii\bootstrap\Modal;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use kartik\date\DatePicker;

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
       <legend>Purchase Order Customer</legend>
       
        <div class="row">
            <div class="col-md-5">
                <?= $form->field($model->purchaseordercustomer, 'pocust_number')->textInput(['maxlength' => true]) ?>
                <?= $form->field($model->purchaseordercustomer, 'wocust_number')->textInput(['maxlength' => true])->hiddenInput()->label(false) ?>
                <?= Html::label('Nama Supplier') ?>
                 <?= Html::input('text', 'supplier-name', $model->purchaseordercustomer->supplier_code, ['class' => 'form-control', 'id' => "po-supplier-name",'readonly' => "true"]) ?>   
                <?= $form->field($model->purchaseordercustomer, 'supplier_code')->textInput(['maxlength' => true])->hiddenInput(['class' => 'form-control','id' => "purchaseorder-supplier_code", 'name' => "purchaseorder-supplier_code"])->label(false) ?> 
                <?= $form->field($model->purchaseordercustomer, 'shipment_method')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-1">
                <br><br><br><br><br>
                <?= Html::img('../web/img/find.png', ['value' => Url::to('index.php?r=material/mst-supplier/lookupsupplier'),'alt'=>'lookupsupplier', 'title' => 'Lookup Supplier','class' => 'showModalButton','id'=>'modalButton']);?> 
            </div>
            
            <div class="col-md-5">
                 <?= $form->field($model->purchaseordercustomer , 'pocust_date')->textInput(['value' => date("d-m-Y"), 'readonly' => "true"])->label('Tanggal') ?>
                <?= $form->field($model->purchaseordercustomer, 'sales_name')->textInput(['maxlength' => true]) ?>
                <?= $form->field($model->purchaseordercustomer, 'payment_method')->textInput(['maxlength' => true]) ?>
                <?= $form->field($model->purchaseordercustomer, 'shipment_date')->widget(DatePicker::classname(), [
                     'options' => ['placeholder' => 'Input tanggal pengiriman ...'],
                     'pluginOptions' => [
                                          'autoclose'=>true,
                                          'format' => 'yyyy-mm-dd',
                       
    ]
]); ?>
            </div>
        </div>
      
    </fieldset>
    
    <br><br>
    
     <fieldset>
        <legend>Purchase Order Customer Detail
            <?php
            // new parcel button
            echo Html::a('Add Detail', 'javascript:void(0);', [
              'id' => 'po-new-purchaseorderdetail-button', 
              'class' => 'pull-right btn btn-default btn-xs'
            ])
            ?>
        </legend>
        <?php
        
        // parcel table
        $purchaseordercustomerdetail = new Purchaseordercustomerdetail();
        $purchaseordercustomerdetail->loadDefaultValues();
        echo '<table id="po-purchaseorderdetails" class="table table-condensed table-bordered">';
        echo '<thead>';
        echo '<tr>';
        echo '<th>' . $purchaseordercustomerdetail->getAttributeLabel('nama_item') . '</th>';
        echo '<th></th>';
        echo '<th>' . $purchaseordercustomerdetail->getAttributeLabel('jumlah') . '</th>';
        echo '<th>' . $purchaseordercustomerdetail->getAttributeLabel('keterangan') . '</th>';
        echo '<th>' . $purchaseordercustomerdetail->getAttributeLabel('harga_per_satuan_unit') . '</th>';
        echo '<th>' . $purchaseordercustomerdetail->getAttributeLabel('total_harga_per_satuan_unit') . '</th>';
        echo '<td>&nbsp;</td>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        
        // existing parcels fields
        foreach ($model->purchaseordercustomerdetails as $key => $_purchaseordercustomerdetail) {
          echo '<tr>';
          echo $this->render('_form-pocust-podetail', [
            'key' => $_purchaseordercustomerdetail->isNewRecord ? (strpos($key, 'new') !== false ? $key : 'new' . $key) : $_purchaseordercustomerdetail->id,
            'form' => $form,
            'purchaseordercustomerdetail' => $_purchaseordercustomerdetail,
          ]);
          echo '</tr>';
        }
        
        // new parcel fields
        echo '<tr id="po-new-purchaseorderdetail-block" style="display: none;">';
        echo $this->render('_form-pocust-podetail', [
            'key' => '__id__',
            'form' => $form,
            'purchaseordercustomerdetail' => $purchaseordercustomerdetail,
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
            if (!Yii::$app->request->isPost && $model->purchaseordercustomer->isNewRecord) 
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