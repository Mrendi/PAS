<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MstPacketProject */

$this->title = 'Update Mst Packet Project: ' . $model->kode_packet_project;
$this->params['breadcrumbs'][] = ['label' => 'Mst Packet Projects', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_packet_project, 'url' => ['view', 'id' => $model->kode_packet_project]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mst-packet-project-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
