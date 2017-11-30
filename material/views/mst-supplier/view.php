<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\material\models\MstSupplier */

$this->title = $model->supplier_code;
$this->params['breadcrumbs'][] = ['label' => 'Mst Suppliers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mst-supplier-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->supplier_code], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->supplier_code], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'supplier_code',
            'supplier_name',
            'description',
            'created_by',
            'created_date',
            'modified_by',
            'modified_date',
            'status',
            'supp_type',
            'initial_po',
            'sales_name',
            'address_supplier',
            'telephon_supplier',
            'fax_supplier',
        ],
    ]) ?>

</div>
