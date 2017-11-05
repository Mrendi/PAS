<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MstMapLokasiProject */

$this->title = 'Update Mst Map Lokasi Project: ' . $model->kode_lokasi_project;
$this->params['breadcrumbs'][] = ['label' => 'Mst Map Lokasi Projects', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_lokasi_project, 'url' => ['view', 'id' => $model->kode_lokasi_project]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mst-map-lokasi-project-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
