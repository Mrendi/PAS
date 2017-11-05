<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MstUsrPrivilagesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mst-usr-privilages-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kode_cab') ?>

    <?= $form->field($model, 'kode_usr_priv') ?>

    <?= $form->field($model, 'kodegrup') ?>

    <?= $form->field($model, 'kode_menu') ?>

    <?= $form->field($model, 'accs_usr') ?>

    <?php // echo $form->field($model, 'upd_by') ?>

    <?php // echo $form->field($model, 'upd_dt_tm') ?>

    <?php // echo $form->field($model, 'is_cancel') ?>

    <?php // echo $form->field($model, 'description') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
