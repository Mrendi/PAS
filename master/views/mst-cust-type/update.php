<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\master\models\MstCustType */

$this->title = 'Update Mst Cust Type: ' . $model->kode_cust_type;
$this->params['breadcrumbs'][] = ['label' => 'Mst Cust Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_cust_type, 'url' => ['view', 'id' => $model->kode_cust_type]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mst-cust-type-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
