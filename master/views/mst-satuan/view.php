<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\master\models\MstSatuan */

$this->title = $model->kode_satuan;
$this->params['breadcrumbs'][] = ['label' => 'Mst Satuans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mst-satuan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->kode_satuan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->kode_satuan], [
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
            'kode_satuan',
            'nama_satuan',
            'satuan_ukur',
            'nilai_per_tingkat',
            'tingkat_satuan',
            'ket_satuan',
            'created_by',
            'created_date',
            'modified_by',
            'modified_date',
            'status',
        ],
    ]) ?>

</div>
