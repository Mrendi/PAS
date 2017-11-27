<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\material\models\MstLokasiItem */

$this->title = $model->kode_lokasi_item;
$this->params['breadcrumbs'][] = ['label' => 'Mst Lokasi Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mst-lokasi-item-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->kode_lokasi_item], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->kode_lokasi_item], [
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
            'kode_lokasi_item',
            'nama_lokasi_item',
            'description',
            'created_by',
            'created_date',
            'modified_by',
            'modified_date',
            'status',
        ],
    ]) ?>

</div>
