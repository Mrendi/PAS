<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TrTimbangan */

$this->title = 'Update Tr Timbangan: ' . $model->no_tr_timbangan;
$this->params['breadcrumbs'][] = ['label' => 'Tr Timbangans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_tr_timbangan, 'url' => ['view', 'id' => $model->no_tr_timbangan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tr-timbangan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
