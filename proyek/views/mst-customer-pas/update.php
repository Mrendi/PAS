<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\proyek\models\MstCustomerPas */

$this->title = 'Update Mst Customer Pas: ' . $model->kode_customer;
$this->params['breadcrumbs'][] = ['label' => 'Mst Customer Pas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_customer, 'url' => ['view', 'id' => $model->kode_customer]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mst-customer-pas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
