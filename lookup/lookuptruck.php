<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Modal;
use yii\widgets\Pjax;



$this->title = 'Lookup Truck';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="tr-timbangan-index">

   <?php Pjax::begin(['enablePushState' => false,'id' => 'modal_pjax']);?>

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
    <script type="text/javascript">
 
            function pilih(row){
            // get data
            var notrtimbangan=row.cells[1].innerHTML;
            var notruck=row.cells[2].innerHTML;
            var namasupir=row.cells[3].innerHTML;
            // alert(cust);
            // set into parent
               document.getElementById("trtimbangan-no_truck").value = notruck;
               document.getElementById("trtimbangan-nama_supir").value = namasupir;
               document.getElementById("trtimbangan-no_tr_timbangan").value = notrtimbangan;
               document.getElementById("inputState").value = "Keluar";
                $('#modal').modal('hide');
            
                
            }
        </script> 
     
        
</div>

