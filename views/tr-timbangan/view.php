<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TrTimbangan */

$this->title = $model->no_tr_timbangan;
$this->params['breadcrumbs'][] = ['label' => 'Tr Timbangans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tr-timbangan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->no_tr_timbangan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->no_tr_timbangan], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'kode_cab',
            'no_form',
            'no_tr_timbangan',
            'no_truck',
            'tanggal',
            'no_po',
            'no_sj',
            'nama_supir',
            'kode_relasi',
            'kode_barang',
            'kode_supplier',
            'kode_customer',
            'kode_barcode',
            'in_datetime',
            'in_jml_berat',
            'in_capture1',
            'in_capture2',
            'out_datetime',
            'out_jml_berat',
            'out_capture1',
            'out_capture2',
            'jml_netton',
            'jml_bruto',
            'jml_potongan',
            'keterangan1',
            'keterangan2',
            'keterangan3',
            'do_scan1',
            'do_scan2',
            'tr_status',
            'is_cancel',
            'upd_by',
            'cekpembayaran',
            'cekpembayaran_upd_by',
            'cekpembayaran_upd_dt_tm',
        ],
    ]) ?>

</div>
