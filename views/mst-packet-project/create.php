<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\MstPacketProject */

$this->title = 'Create Mst Packet Project';
$this->params['breadcrumbs'][] = ['label' => 'Mst Packet Projects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mst-packet-project-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
