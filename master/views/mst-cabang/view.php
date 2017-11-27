<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\master\models\MstCabang */

$this->title = $model->kode_cab;
$this->params['breadcrumbs'][] = ['label' => 'Mst Cabangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mst-cabang-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->kode_cab], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->kode_cab], [
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
            'nama_cab',
            'alamat_cab',
            'telp_cab',
            'contact_1',
            'hp_contact1',
            'created_by',
            'created_date',
            'modified_by',
            'modified_date',
            'status',
        ],
    ]) ?>

</div>
