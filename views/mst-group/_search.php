<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MstGroupSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mst-group-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kodegrup') ?>

    <?= $form->field($model, 'namagrup') ?>

    <?= $form->field($model, 'createdby') ?>

    <?= $form->field($model, 'createddate') ?>

    <?= $form->field($model, 'modifiedby') ?>

    <?php // echo $form->field($model, 'modifieddate') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'is_cancel') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
