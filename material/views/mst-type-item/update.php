<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\material\models\MstTypeItem */

$this->title = 'Update Mst Type Item: ' . $model->kode_type_item;
$this->params['breadcrumbs'][] = ['label' => 'Mst Type Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_type_item, 'url' => ['view', 'id' => $model->kode_type_item]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mst-type-item-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
