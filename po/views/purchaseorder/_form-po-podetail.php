<?php

use app\po\models\Purchaseorderdetail;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Modal;

?>
<td>
    
 <?= Html::activeHiddenInput($purchaseorderdetail, 'kode_item',['id' => "Purchaseorderdetails_{$key}_kode_item",
         'name' => "Purchaseorderdetails[$key][kode_item]",]); ?>
 <?= $form->field($purchaseorderdetail, 'nama_item')->textInput([
        'id' => "Purchaseorderdetails_{$key}_nama_item",
        'name' => "Purchaseorderdetails[$key][nama_item]",
                'readonly' => "true",
    ])->label(false) ?>

</td>
<td>
   <?= Html::img('../web/img/find.png', ['value' => Url::to('index.php?r=material/mst-type-item/lookupitempo'),'alt'=>'lookupkodeitem', 'title' => $key,'class' => 'showModalButton','id'=>'modalButton']);?> 
</td>
<td>
    <?= $form->field($purchaseorderdetail, 'jumlah_item')->textInput([
        'id' => "Purchaseorderdetails_{$key}_jumlah_item",
        'name' => "Purchaseorderdetails[$key][jumlah_item]",
    ])->label(false) ?>
</td>
<td>
    <?= $form->field($purchaseorderdetail, 'keterangan')->textInput([
        'id' => "Purchaseorderdetails_{$key}_keterangan",
        'name' => "Purchaseorderdetails[$key][keterangan]",
    ])->label(false) ?>
</td>
<td>
    <?= $form->field($purchaseorderdetail, 'harga_per_satuan_unit')->textInput([
        'id' => "Purchaseorderdetails_{$key}_harga_per_satuan_unit",
        'name' => "Purchaseorderdetails[$key][harga_per_satuan_unit]",
    ])->label(false) ?>
</td>
<td>
    <?= $form->field($purchaseorderdetail, 'total_harga_per_satuan_unit')->textInput([
        'id' => "Purchaseorderdetails_{$key}_total_harga_per_satuan_unit",
        'name' => "Purchaseorderdetails[$key][total_harga_per_satuan_unit]",
        
    ])->label(false) ?>
</td>
<td>
    <?= Html::a('Remove ', 'javascript:void(0);', [
      'class' => 'po-remove-purchaseorderdetail-button btn btn-default btn-xs',
    ]) ?>
</td>