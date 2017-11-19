<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\master\models\MstUsrPrivilages */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mst-usr-privilages-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_cab')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_usr_priv')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kodegrup')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_menu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'accs_usr')->textInput() ?>

    <?= $form->field($model, 'upd_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'upd_dt_tm')->textInput() ?>

    <?= $form->field($model, 'is_cancel')->textInput() ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
