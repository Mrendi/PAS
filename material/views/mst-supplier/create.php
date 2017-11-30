<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\material\models\MstSupplier */

$this->title = 'Create Mst Supplier';
$this->params['breadcrumbs'][] = ['label' => 'Mst Suppliers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mst-supplier-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
