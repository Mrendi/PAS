<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MstUsr */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mst-usr-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_cab')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_usr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_usr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pass_usr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telp_usr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ktp_usr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'scan_ktp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hp_usr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email_usr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email_2_kntr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email_3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ket_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ket_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_date')->textInput() ?>

    <?= $form->field($model, 'modified_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'modified_date')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'auth')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kodegrup')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lppbm_approval_code')->textInput() ?>

    <?= $form->field($model, 'po_approval_code')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
