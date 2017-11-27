<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\material\models\MstLokasiItem */

$this->title = 'Update Mst Lokasi Item: ' . $model->kode_lokasi_item;
$this->params['breadcrumbs'][] = ['label' => 'Mst Lokasi Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_lokasi_item, 'url' => ['view', 'id' => $model->kode_lokasi_item]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mst-lokasi-item-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
