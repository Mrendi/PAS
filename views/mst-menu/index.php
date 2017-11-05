<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MstMenuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mst Menus';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mst-menu-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Mst Menu', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_cab',
            'kode_menu',
            'menu_order',
            'nama_menu',
            'ket_1',
            // 'upd_by',
            // 'upd_dt_tm',
            // 'is_cancel',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
