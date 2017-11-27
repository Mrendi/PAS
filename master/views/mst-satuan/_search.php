<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\master\models\MstSatuanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mst-satuan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kode_satuan') ?>

    <?= $form->field($model, 'nama_satuan') ?>

    <?= $form->field($model, 'satuan_ukur') ?>

    <?= $form->field($model, 'nilai_per_tingkat') ?>

    <?= $form->field($model, 'tingkat_satuan') ?>

    <?php // echo $form->field($model, 'ket_satuan') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'created_date') ?>

    <?php // echo $form->field($model, 'modified_by') ?>

    <?php // echo $form->field($model, 'modified_date') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
