<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\po\models\PurchaseOrder */

$this->title = 'Create Purchase Order';
$this->params['breadcrumbs'][] = ['label' => 'Purchase Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="purchase-order-create">

    <br><br>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
