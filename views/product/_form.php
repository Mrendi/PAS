<?php

use app\models\Parcel;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

?>
<div class="product-form">

    <?php $form = ActiveForm::begin([
        'enableClientValidation' => false, // TODO get this working with client validation
    ]); ?>

     <?= $model->errorSummary($form); ?>

    <fieldset>
        <legend>Product</legend>
        <?= $form->field($model->product, 'name')->textInput() ?>
    </fieldset>

    <fieldset>
        <legend>Parcels
            <?php
            // new parcel button
            echo Html::a('New Parcel', 'javascript:void(0);', [
              'id' => 'product-new-parcel-button', 
              'class' => 'pull-right btn btn-default btn-xs'
            ])
            ?>
        </legend>
        <?php
        
        // parcel table
        $parcel = new Parcel();
        $parcel->loadDefaultValues();
        echo '<table id="product-parcels" class="table table-condensed table-bordered">';
        echo '<thead>';
        echo '<tr>';
        echo '<th>' . $parcel->getAttributeLabel('code') . '</th>';
        echo '<th>' . $parcel->getAttributeLabel('height') . '</th>';
        echo '<th>' . $parcel->getAttributeLabel('width') . '</th>';
        echo '<th>' . $parcel->getAttributeLabel('depth') . '</th>';
        echo '<th>' . $parcel->getAttributeLabel('date_ordered') . '</th>';
        echo '<td>&nbsp;</td>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        
        // existing parcels fields
        foreach ($model->parcels as $key => $_parcel) {
          echo '<tr>';
          echo $this->render('_form-product-parcel', [
            'key' => $_parcel->isNewRecord ? (strpos($key, 'new') !== false ? $key : 'new' . $key) : $_parcel->id,
            'form' => $form,
            'parcel' => $_parcel,
          ]);
          echo '</tr>';
        }
        
        // new parcel fields
        echo '<tr id="product-new-parcel-block" style="display: none;">';
        echo $this->render('_form-product-parcel', [
            'key' => '__id__',
            'form' => $form,
            'parcel' => $parcel,
        ]);
        echo '</tr>';
        echo '</tbody>';
        echo '</table>';
        
        // OPTIONAL: register JS assets as required for widgets
       
        ?>

        <?php ob_start(); // output buffer the javascript to register later ?>
        <script>
            
            // add parcel button
            var parcel_k = <?php echo isset($key) ? str_replace('new', '', $key) : 0; ?>;
            $('#product-new-parcel-button').on('click', function () {
                parcel_k += 1;
                $('#product-parcels').find('tbody')
                  .append('<tr>' + $('#product-new-parcel-block').html().replace(/__id__/g, 'new' + parcel_k) + '</tr>');
                
               
                
               

                // OPTIONAL: autocomplete on copied row
              
                
            });
            
            // remove parcel button
            $(document).on('click', '.product-remove-parcel-button', function () {
                $(this).closest('tbody tr').remove();
            });
            
            <?php
            // OPTIONAL: click add when the form first loads to display the first new row
            if (!Yii::$app->request->isPost && $model->product->isNewRecord) 
              echo "$('#product-new-parcel-button').click();";
            ?>
            
           
            
           

        </script>
        <?php $this->registerJs(str_replace(['<script>', '</script>'], '', ob_get_clean())); ?>

    </fieldset>

    <?= Html::submitButton('Save'); ?>
    <?php ActiveForm::end(); ?>

</div>