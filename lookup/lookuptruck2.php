<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Modal;
use yii\widgets\Pjax;


$this->title = 'Lookup Branch';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="tr-timbangan-index">

   <?php Pjax::begin(['enablePushState' => true,'id' => 'modal_pjax']);?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        //Rendi --> untuk select data row
        'rowOptions' => function ($dataProvider) {
              //  return ['id' => $dataProvider['kode_packet_project'], 'onclick' => 'alert(this.id);'];
          return ['id' => $dataProvider['no_tr_timbangan'], 'onclick' => "javascript:pilih(this);"];
        },
        //end
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            
            'no_tr_timbangan',
            'no_truck',
            'nama_supir',
            
        ],
    ]); ?>
    
   
   <?php Pjax::end()?>
    
     
</div>

<script type="text/javascript">
 
            function pilih(row){
            // get data
            var currentId = $('h4').html();//$(document.getElementsByClassName("showModalButton")).attr('title');
            var notruck=row.cells[2].innerHTML;
            var id = "Parcels_" + currentId + "_code";
            //alert(id);
            // set into parent
            document.getElementById(id).value = notruck;
               
                //$('#modal').modal('hide');
            
                
            }
        </script> 