<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\master\models\MstMenu */

$this->title = $model->kode_menu;
$this->params['breadcrumbs'][] = ['label' => 'Mst Menus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mst-menu-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->kode_menu], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->kode_menu], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'kode_cab',
            'kode_menu',
            'menu_order',
            'nama_menu',
            'ket_1',
            'upd_by',
            'upd_dt_tm',
            'is_cancel',
        ],
    ]) ?>

</div>
