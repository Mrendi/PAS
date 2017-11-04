<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MstCabang */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mst-cabang-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_cab')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_cab')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat_cab')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telp_cab')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contact_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hp_contact1')->textInput(['maxlength' => true]) ?>

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
