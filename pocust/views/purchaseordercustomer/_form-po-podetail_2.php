<?php

use app\po\models\PurchaseOrderDetail;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Modal;

?>
<td>
    <?= $form->field($purchaseorderdetail, 'kode_item')->textInput([
        'id' => "Purchaseorderdetails_{$key}_kode_item",
        'name' => "Purchaseorderdetails[$key][kode_item]",
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
    <?= $form->field($purchaseorderdetail, 'kode_stock')->textInput([
        'id' => "Purchaseorderdetails_{$key}_kode_stock",
        'name' => "Purchaseorderdetails[$key][kode_stock]",
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
    <?= Html::a('Remove ' . $key, 'javascript:void(0);', [
      'class' => 'po-remove-purchaseorderdetail-button btn btn-default btn-xs',
    ]) ?>
</td>