<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\MstUsr */

$this->title = $model->kode_usr;
$this->params['breadcrumbs'][] = ['label' => 'Mst Usrs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mst-usr-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->kode_usr], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->kode_usr], [
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
            'kode_usr',
            'nama_usr',
            'pass_usr',
            'telp_usr',
            'ktp_usr',
            'scan_ktp',
            'hp_usr',
            'email_usr:email',
            'email_2_kntr:email',
            'email_3:email',
            'ket_1',
            'ket_2',
            'created_by',
            'created_date',
            'modified_by',
            'modified_date',
            'status',
            'auth',
            'kodegrup',
            'lppbm_approval_code',
            'po_approval_code',
        ],
    ]) ?>

</div>
