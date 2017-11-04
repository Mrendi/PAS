<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MstCabangSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mst-cabang-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kode_cab') ?>

    <?= $form->field($model, 'nama_cab') ?>

    <?= $form->field($model, 'alamat_cab') ?>

    <?= $form->field($model, 'telp_cab') ?>

    <?= $form->field($model, 'contact_1') ?>

    <?php // echo $form->field($model, 'hp_contact1') ?>

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
