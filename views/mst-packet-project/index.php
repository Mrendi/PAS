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

    <p>
        <?= Html::a('Create Mst Packet Project', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
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
</div>
