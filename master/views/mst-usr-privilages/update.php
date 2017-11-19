<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\master\models\MstUsrPrivilages */

$this->title = 'Update Mst Usr Privilages: ' . $model->kode_usr_priv;
$this->params['breadcrumbs'][] = ['label' => 'Mst Usr Privilages', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_usr_priv, 'url' => ['view', 'id' => $model->kode_usr_priv]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mst-usr-privilages-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
