<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\material\models\MstLokasiItem */

$this->title = 'Create Mst Lokasi Item';
$this->params['breadcrumbs'][] = ['label' => 'Mst Lokasi Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mst-lokasi-item-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
