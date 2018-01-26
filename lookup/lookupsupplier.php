<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Modal;
use yii\widgets\Pjax;



$this->title = 'Lookup Supplier';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="mst-supplier-index">

   <?php Pjax::begin(['enablePushState' => false,'id' => 'modal_pjax']);?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        //Rendi --> untuk select data row
        'rowOptions' => function ($dataProvider) {
              //  return ['id' => $dataProvider['kode_packet_project'], 'onclick' => 'alert(this.id);'];
          return ['id' => $dataProvider['supplier_code'], 'onclick' => "javascript:pilih(this);"];
        },
        //end
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            
            'supplier_code',
            'supplier_name',
            'description',
            
        ],
    ]); ?>
   <?php Pjax::end()?>
    <script type="text/javascript">
 
            function pilih(row){
            // get data
            var suppliercode=row.cells[1].innerHTML;
            var suppliername=row.cells[2].innerHTML;
            // alert(cust);
            // set into parent
               document.getElementById("purchaseorder-supplier_code").value = suppliercode;
               document.getElementById("po-supplier-name").value = suppliername;
                $('#modal').modal('hide');
            
                
            }
        </script> 
     
        
</div>

