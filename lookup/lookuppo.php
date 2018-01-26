<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Modal;
use yii\widgets\Pjax;



$this->title = 'Lookup Po';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="mst-type-item-index">

   <?php Pjax::begin(['enablePushState' => false,'id' => 'modal_pjax']);?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        //Rendi --> untuk select data row
        'rowOptions' => function ($dataProvider) {
              //  return ['id' => $dataProvider['kode_packet_project'], 'onclick' => 'alert(this.id);'];
          return ['id' => $dataProvider['po_number'], 'onclick' => "javascript:pilih(this);"];
        },
        //end
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            
            'po_number',
            'po_date',
            'supplier_code',
            
        ],
    ]); ?>
   <?php Pjax::end()?>
    <script type="text/javascript">
 
            function pilih(row){
            
            // get data
            var ponomor=row.cells[1].innerHTML;
            var posuppcode=row.cells[3].innerHTML;
           //alert(ponomor);
            // set into parent
               //document.getElementById("trtimbangan-kode_barang").value = kodetypeitem;
               document.getElementById("trtimbangan-no_po").value = ponomor;
               document.getElementById("trtimbangan-kode_supplier").value = posuppcode;
               
                $('#modal').modal('hide');
            
                
            }
        </script> 
     
        
</div>

