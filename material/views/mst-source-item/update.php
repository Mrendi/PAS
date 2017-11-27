<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\material\models\MstSourceItem */

$this->title = 'Update Mst Source Item: ' . $model->kode_source_item;
$this->params['breadcrumbs'][] = ['label' => 'Mst Source Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_source_item, 'url' => ['view', 'id' => $model->kode_source_item]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mst-source-item-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
