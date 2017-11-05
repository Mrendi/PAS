<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\MstMapLokasiProject */

$this->title = 'Create Mst Map Lokasi Project';
$this->params['breadcrumbs'][] = ['label' => 'Mst Map Lokasi Projects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mst-map-lokasi-project-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
