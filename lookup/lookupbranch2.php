<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Modal;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MstPacketProjectSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lookup Branch';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="mst-cabang-index">

   <?php Pjax::begin(['enablePushState' => false,'id' => 'modal_pjax']);?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        //Rendi --> untuk select data row
        'rowOptions' => function ($dataProvider) {
              //  return ['id' => $dataProvider['kode_packet_project'], 'onclick' => 'alert(this.id);'];
          return ['id' => $dataProvider['kode_cab'], 'onclick' => "javascript:pilih(this);"];
        },
        //end
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_cab',
            'nama_cab',
            
        ],
    ]); ?>
   <?php Pjax::end()?>
    <script type="text/javascript">
 
            function pilih(row){
            // get data
            var branchcode=row.cells[1].innerHTML;
            var branchname=row.cells[2].innerHTML;
            // alert(cust);
            // set into parent
               document.getElementById("signup-branch_code").value = branchcode;
               document.getElementById("signup-branch-name").value = branchname;
            
                $('#modal').modal('hide');
            
                
            }
        </script> 
     
        
</div>

