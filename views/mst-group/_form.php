<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MstGroup */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mst-group-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kodegrup')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'namagrup')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'createdby')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'createddate')->textInput() ?>

    <?= $form->field($model, 'modifiedby')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'modifieddate')->textInput() ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'is_cancel')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
