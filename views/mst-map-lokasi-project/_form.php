<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap\Modal;
use yii\widget\Pjax;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\MstMapLokasiProject */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mst-map-lokasi-project-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_lokasi_project')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_customer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_lokasi',[ 'options' => ['style' => 'width: 450px']])->textInput(['maxlength' => true]) ?> 
 <?= Html::button('Create Mst Packet Project', ['value' => Url::to('index.php?r=mst-packet-project/lookup'),'class' => 'btn btn-success','id'=>'modalButton']) ?>
    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_date')->textInput() ?>

    <?= $form->field($model, 'modified_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'modified_date')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
<div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'kode_customer') ?>
            <?= $form->field($model, 'status') ?>
       </div>
        <div class="col-md-6">
            <?= $form->field($model, 'status') ?>
            <?= $form->field($model, 'kode_customer') ?>
       </div>
    </div>
    <?php ActiveForm::end(); ?>
 <?php
        Modal::begin([
        'header' => '<h4>Siswa</h4>',
        'id' => 'modal',
        'size' => 'modal-lg',
        ]); 

        echo "<div id='modalContent'><div>";
        Modal::end()
    ?>
    
    
</div>
