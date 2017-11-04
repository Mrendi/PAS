<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MstUsr */

$this->title = 'Update Mst Usr: ' . $model->kode_usr;
$this->params['breadcrumbs'][] = ['label' => 'Mst Usrs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_usr, 'url' => ['view', 'id' => $model->kode_usr]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mst-usr-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
