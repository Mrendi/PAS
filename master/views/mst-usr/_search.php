<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\master\models\MstUsrSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mst-usr-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kode_cab') ?>

    <?= $form->field($model, 'kode_usr') ?>

    <?= $form->field($model, 'nama_usr') ?>

    <?= $form->field($model, 'pass_usr') ?>

    <?= $form->field($model, 'telp_usr') ?>

    <?php // echo $form->field($model, 'ktp_usr') ?>

    <?php // echo $form->field($model, 'scan_ktp') ?>

    <?php // echo $form->field($model, 'hp_usr') ?>

    <?php // echo $form->field($model, 'email_usr') ?>

    <?php // echo $form->field($model, 'email_2_kntr') ?>

    <?php // echo $form->field($model, 'email_3') ?>

    <?php // echo $form->field($model, 'ket_1') ?>

    <?php // echo $form->field($model, 'ket_2') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'created_date') ?>

    <?php // echo $form->field($model, 'modified_by') ?>

    <?php // echo $form->field($model, 'modified_date') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'auth') ?>

    <?php // echo $form->field($model, 'kodegrup') ?>

    <?php // echo $form->field($model, 'lppbm_approval_code') ?>

    <?php // echo $form->field($model, 'po_approval_code') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
