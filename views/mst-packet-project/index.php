<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Modal;
use yii\widgets\Pjax;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $searchModel app\models\MstPacketProjectSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mst Packet Projects';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="mst-packet-project-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
  
    <p>
        <?= Html::button('Create Mst Packet Project', ['value' => Url::to('index.php?r=mst-packet-project/create'),'class' => 'btn btn-success','id'=>'']) ?>
        <?= Html::button('Create Mst Packet Project', ['value' => Url::to('index.php?r=mst-packet-project/lookup'),'class' => 'btn btn-success','id'=>'modalButton']) ?>
        <?= Html::a('Create Mst Packet Project', ['create'], ['class' => 'btn btn-success','id'=>'modalButton']) ?>
    </p><br>
   
   
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
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

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    
      <?php
        Modal::begin([
        'header' => '<h4>Siswa</h4>',
        'id' => 'modal',
        'size' => 'modal-lg',
        ]); 

        echo "<div id='modalContent'><div>";
        Modal::end()
    ?>
</div>
