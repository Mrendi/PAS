<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\master\models\MstCabang */

$this->title = 'Update Master Cabang: ' . $model->nama_cab;
$this->params['breadcrumbs'][] = ['label' => 'Mst Cabangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_cab, 'url' => ['view', 'id' => $model->kode_cab]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mst-cabang-update">

    <br>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
