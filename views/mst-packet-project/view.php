<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\MstPacketProject */

$this->title = $model->kode_packet_project;
$this->params['breadcrumbs'][] = ['label' => 'Mst Packet Projects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mst-packet-project-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->kode_packet_project], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->kode_packet_project], [
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
            'kode_packet_project',
            'nama_packet_project',
            'description',
            'created_by',
            'created_date',
            'modified_by',
            'modified_date',
            'status',
            'kode_lokasi_project',
            'kode_map_packet_lokasi',
        ],
    ]) ?>

</div>
