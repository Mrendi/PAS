<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\material\models\MstSupplierSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mst-supplier-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'supplier_code') ?>

    <?= $form->field($model, 'supplier_name') ?>

    <?= $form->field($model, 'description') ?>

    <?= $form->field($model, 'created_by') ?>

    <?= $form->field($model, 'created_date') ?>

    <?php // echo $form->field($model, 'modified_by') ?>

    <?php // echo $form->field($model, 'modified_date') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'supp_type') ?>

    <?php // echo $form->field($model, 'initial_po') ?>

    <?php // echo $form->field($model, 'sales_name') ?>

    <?php // echo $form->field($model, 'address_supplier') ?>

    <?php // echo $form->field($model, 'telephon_supplier') ?>

    <?php // echo $form->field($model, 'fax_supplier') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
