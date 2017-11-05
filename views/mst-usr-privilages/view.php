<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\MstUsrPrivilages */

$this->title = $model->kode_usr_priv;
$this->params['breadcrumbs'][] = ['label' => 'Mst Usr Privilages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mst-usr-privilages-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->kode_usr_priv], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->kode_usr_priv], [
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
            'kode_usr_priv',
            'kodegrup',
            'kode_menu',
            'accs_usr',
            'upd_by',
            'upd_dt_tm',
            'is_cancel',
            'description',
        ],
    ]) ?>

</div>
