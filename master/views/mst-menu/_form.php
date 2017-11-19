<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\master\models\MstMenu */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mst-menu-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_cab')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_menu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'menu_order')->textInput() ?>

    <?= $form->field($model, 'nama_menu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ket_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'upd_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'upd_dt_tm')->textInput() ?>

    <?= $form->field($model, 'is_cancel')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
