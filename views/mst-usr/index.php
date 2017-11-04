<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MstUsrSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mst Usrs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mst-usr-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Mst Usr', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_cab',
            'kode_usr',
            'nama_usr',
            'pass_usr',
            'telp_usr',
            // 'ktp_usr',
            // 'scan_ktp',
            // 'hp_usr',
            // 'email_usr:email',
            // 'email_2_kntr:email',
            // 'email_3:email',
            // 'ket_1',
            // 'ket_2',
            // 'created_by',
            // 'created_date',
            // 'modified_by',
            // 'modified_date',
            // 'status',
            // 'auth',
            // 'kodegrup',
            // 'lppbm_approval_code',
            // 'po_approval_code',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
