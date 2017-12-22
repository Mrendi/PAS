<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MstPacketProjectSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mst Packet Projects';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="mst-packet-project-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        //baru Tambah
        'rowOptions' => function ($dataProvider) {
              //  return ['id' => $dataProvider['kode_packet_project'], 'onclick' => 'alert(this.id);'];
          return ['id' => $dataProvider['kode_packet_project'], 'onclick' => "javascript:pilih(this);"];
        },
        //end
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_packet_project',
            'nama_packet_project',
            'description',
            'created_by',
            'created_date',
            // 'modified_by',
            // 'modified_date',
            // 'status',
            // 'kode_lokasi_project',
            // 'kode_map_packet_lokasi',
        [
    'header'=>'Plan Info',
    'value'=> function($dataProvider)
              { 
                   return  Html::a(Yii::t('app', ' {modelClass}', [
                          'modelClass' => 'details',
                          ]), ['userdetails/plans','kode_packet_project'=>$dataProvider->kode_packet_project], ['class' => 'btn btn-success', 'id' => 'popupModal']);      
              },
     'format' => 'raw'
],
    
           
          
            ///['class' => 'yii\grid\ActionColumn'],
                  
        ],
    ]); ?>
   
    <script type="text/javascript">
 
//            jika dipilih, kode obat akan masuk ke input dan modal di tutup
            $(document).on('click', '.pilih', function (e) {
                document.getElementById("kode_obat").value = $(this).attr('data-kodeobat');
                $('#myModal').modal('hide');
            });
 
//            tabel lookup obat
            $(function () {
                $("#lookup").dataTable();
            });
 
            function dummy() {
                var kode_obat = document.getElementById("kode_obat").value;
                alert('kode obat ' + kode_obat + ' berhasil tersimpan');
            }
            
            
            function pilih(row){
//        mendapatkan nama kota
        var cust=row.cells[1].innerHTML;
        var emp=row.cells[2].innerHTML;
//        alert(cust);
//        memasukkan nama kota dalam form
               document.getElementById("mstmaplokasiproject-kode_lokasi").value = cust;
               document.getElementById("mstmaplokasiproject-description").value = emp;
                $('#modal').modal('hide');
            
                

 //$('#modal').modal('hide');
//
       // window.opener.parent.document.getElementById("kode_lokasi").value = cust;
//        menutup pop up

//        window.close();
    }
        </script> 
     
        
</div>

