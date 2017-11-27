<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\timbangan\models\TrTimbanganSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tr Timbangans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tr-timbangan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tr Timbangan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_cab',
            'no_form',
            'no_tr_timbangan',
            'no_truck',
            'tanggal',
            // 'no_po',
            // 'no_sj',
            // 'nama_supir',
            // 'kode_relasi',
            // 'kode_barang',
            // 'kode_supplier',
            // 'kode_customer',
            // 'kode_barcode',
            // 'in_datetime',
            // 'in_jml_berat',
            // 'in_capture1',
            // 'in_capture2',
            // 'out_datetime',
            // 'out_jml_berat',
            // 'out_capture1',
            // 'out_capture2',
            // 'jml_netton',
            // 'jml_bruto',
            // 'jml_potongan',
            // 'keterangan1',
            // 'keterangan2',
            // 'keterangan3',
            // 'do_scan1',
            // 'do_scan2',
            // 'tr_status',
            // 'is_cancel',
            // 'upd_by',
            // 'cekpembayaran',
            // 'cekpembayaran_upd_by',
            // 'cekpembayaran_upd_dt_tm',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
