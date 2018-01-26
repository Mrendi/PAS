<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Modal;
use yii\widgets\Pjax;



$this->title = 'Lookup Item';
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
          return ['id' => $dataProvider['kode_type_item'], 'onclick' => "javascript:pilih(this);"];
        },
        //end
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            
            'kode_type_item',
            'nama_type_item',
            
        ],
    ]); ?>
   <?php Pjax::end()?>
    <script type="text/javascript">
 
            function pilih(row){
            var currentId = $('h4').html();//$(document.getElementsByClassName("showModalButton")).attr('title');
            
            var id = "Purchaseorderdetails_" + currentId + "_kode_item";
            var namaitem = "Purchaseorderdetails_" + currentId + "_nama_item";
            // get data
            var kodetypeitem=row.cells[1].innerHTML;
            var namatypeitem=row.cells[2].innerHTML;
            // alert(cust);
            // set into parent
               //document.getElementById("trtimbangan-kode_barang").value = kodetypeitem;
               document.getElementById(id).value = kodetypeitem;
               document.getElementById(namaitem).value = namatypeitem;
                $('#modal').modal('hide');
            
                
            }
        </script> 
     
        
</div>

