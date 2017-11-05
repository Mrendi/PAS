<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MstGroup */

$this->title = 'Update Mst Group: ' . $model->kodegrup;
$this->params['breadcrumbs'][] = ['label' => 'Mst Groups', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kodegrup, 'url' => ['view', 'id' => $model->kodegrup]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mst-group-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
