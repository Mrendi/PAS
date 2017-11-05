<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\MstSatuan */

$this->title = 'Create Mst Satuan';
$this->params['breadcrumbs'][] = ['label' => 'Mst Satuans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mst-satuan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
