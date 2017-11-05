<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MstMenu */

$this->title = 'Update Mst Menu: ' . $model->kode_menu;
$this->params['breadcrumbs'][] = ['label' => 'Mst Menus', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_menu, 'url' => ['view', 'id' => $model->kode_menu]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mst-menu-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
