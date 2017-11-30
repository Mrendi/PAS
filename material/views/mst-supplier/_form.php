<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\material\models\MstSupplier */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mst-supplier-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'supplier_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'supplier_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_date')->textInput() ?>

    <?= $form->field($model, 'modified_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'modified_date')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'supp_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'initial_po')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sales_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address_supplier')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telephon_supplier')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fax_supplier')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
