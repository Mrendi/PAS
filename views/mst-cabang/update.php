<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MstCabang */

$this->title = 'Update Mst Cabang: ' . $model->kode_cab;
$this->params['breadcrumbs'][] = ['label' => 'Mst Cabangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_cab, 'url' => ['view', 'id' => $model->kode_cab]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mst-cabang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
