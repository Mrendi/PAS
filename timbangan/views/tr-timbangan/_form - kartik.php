<?php

use yii\helpers\Html;
/* use yii\widgets\ActiveForm; */
use yii\helpers\Url;
use yii\bootstrap\Modal;
/* @var $this yii\web\View */
/* @var $model app\timbangan\models\TrTimbangan */
/* @var $form yii\widgets\ActiveForm */


use kartik\form\ActiveForm;
use kartik\builder\Form;
$form = ActiveForm::begin(['type'=>ActiveForm::TYPE_HORIZONTAL, 'formConfig'=>['labelSpan'=>6]]);

echo Form::widget([ // fields with labels
    'model'=>$model,
    'form'=>$form,
    'columns'=>4,
    'attributes'=>[
        'no_truck'=>['label'=>'No Truck', 'options'=>['placeholder'=>'Province 1...']],
        'xxx'=>[
                        'type'=>Form::INPUT_RAW, 
                        'value'=>'<div style="text-align: left;">' . 
                        Html::img('../web/img/find.png', ['value' => Url::to('index.php?r=timbangan/tr-timbangan/lookuptruck'),'alt'=>'lookuptruck', 'title' => 'Lookup Truck','class' => 'showModalButton','id'=>'modalButton']) .
                            '</div>'
                        ],
               
              
        'tanggal'=>['label'=>'Province 2', 'options'=>['placeholder'=>'Province 2...']],
                                'type'=>Form::INPUT_RAW, 
        'xsxx'=>[
                        'type'=>Form::INPUT_RAW, 
                        'value'=>'<div style="text-align: left;">' . 
                        Html::img('../web/img/find.png', ['value' => Url::to('index.php?r=timbangan/tr-timbangan/lookuptruck'),'alt'=>'lookuptruck', 'title' => 'Lookup Truck','class' => 'showModalButton','id'=>'modalButton']) .
                            '</div>'
                        ],

    ]
    
    
]);

ActiveForm::end();
?>
 

 <?php
        Modal::begin([
        'headerOptions' => ['id' => 'modalHeader'],
        'id' => 'modal',
        'size' => 'modal-lg',
        ]); 

        echo "<div id='modalContent'><div>";
        Modal::end()
    ?>
