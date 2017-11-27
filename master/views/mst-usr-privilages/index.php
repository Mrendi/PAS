<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\master\models\MstUsrPrivilagesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mst Usr Privilages';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mst-usr-privilages-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Mst Usr Privilages', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_cab',
            'kode_usr_priv',
            'kodegrup',
            'kode_menu',
            'accs_usr',
            // 'upd_by',
            // 'upd_dt_tm',
            // 'is_cancel',
            // 'description',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
