<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MstSatuanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mst Satuans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mst-satuan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Mst Satuan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_satuan',
            'nama_satuan',
            'satuan_ukur',
            'nilai_per_tingkat',
            'tingkat_satuan',
            // 'ket_satuan',
            // 'created_by',
            // 'created_date',
            // 'modified_by',
            // 'modified_date',
            // 'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
