<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MstCabangSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mst Cabangs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mst-cabang-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Mst Cabang', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_cab',
            'nama_cab',
            'alamat_cab',
            'telp_cab',
            'contact_1',
            // 'hp_contact1',
            // 'created_by',
            // 'created_date',
            // 'modified_by',
            // 'modified_date',
            // 'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
