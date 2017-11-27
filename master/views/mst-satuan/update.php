<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\master\models\MstSatuan */

$this->title = 'Update Mst Satuan: ' . $model->kode_satuan;
$this->params['breadcrumbs'][] = ['label' => 'Mst Satuans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_satuan, 'url' => ['view', 'id' => $model->kode_satuan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mst-satuan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
