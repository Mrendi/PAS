<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MstSatuan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mst-satuan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_satuan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_satuan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'satuan_ukur')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nilai_per_tingkat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tingkat_satuan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ket_satuan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_date')->textInput() ?>

    <?= $form->field($model, 'modified_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'modified_date')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
