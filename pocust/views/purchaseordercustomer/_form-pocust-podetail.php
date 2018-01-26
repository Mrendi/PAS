<?php

use app\pocust\models\Purchaseordercustomerdetail;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Modal;

?>
<td>
    
 <?= Html::activeHiddenInput($purchaseordercustomerdetail, 'kode_item',['id' => "Purchaseordercustomerdetails_{$key}_kode_item",
         'name' => "Purchaseorderdetails[$key][kode_item]",]); ?>
 <?= $form->field($purchaseordercustomerdetail, 'nama_item')->textInput([
        'id' => "Purchaseorderdetails_{$key}_nama_item",
        'name' => "Purchaseorderdetails[$key][nama_item]",
                'readonly' => "true",
    ])->label(false) ?>

</td>
<td>
   <?= Html::img('../web/img/find.png', ['value' => Url::to('index.php?r=material/mst-type-item/lookupitempo'),'alt'=>'lookupkodeitem', 'title' => $key,'class' => 'showModalButton','id'=>'modalButton']);?> 
</td>
<td>
    <?= $form->field($purchaseordercustomerdetail, 'jumlah_item')->textInput([
        'id' => "Purchaseordercustomerdetails_{$key}_jumlah_item",
        'name' => "Purchaseordercustomerdetails[$key][jumlah_item]",
    ])->label(false) ?>
</td>
<td>
    <?= $form->field($purchaseordercustomerdetail, 'keterangan')->textInput([
        'id' => "Purchaseordercustomerdetails_{$key}_keterangan",
        'name' => "Purchaseordercustomerdetails[$key][keterangan]",
    ])->label(false) ?>
</td>

<td>
    <?= $form->field($purchaseordercustomerdetail, 'harga_per_satuan_unit')->textInput([
        'id' => "Purchaseordercustomerdetails_{$key}_harga_per_satuan_unit",
        'name' => "Purchaseordercustomerdetails[$key][harga_per_satuan_unit]",
    ])->label(false) ?>
</td>
<td>
    <?= $form->field($purchaseordercustomerdetail, 'total_harga_per_satuan_unit')->textInput([
        'id' => "Purchaseordercustomerdetails_{$key}_total_harga_per_satuan_unit",
        'name' => "Purchaseordercustomerdetails[$key][total_harga_per_satuan_unit]",
        
    ])->label(false) ?>
</td>
<td>
    <?= Html::a('Remove ', 'javascript:void(0);', [
      'class' => 'po-remove-purchaseorderdetail-button btn btn-default btn-xs',
    ]) ?>
</td>