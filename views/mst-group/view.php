<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\MstGroup */

$this->title = $model->kodegrup;
$this->params['breadcrumbs'][] = ['label' => 'Mst Groups', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mst-group-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->kodegrup], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->kodegrup], [
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
            'kodegrup',
            'namagrup',
            'createdby',
            'createddate',
            'modifiedby',
            'modifieddate',
            'description',
            'is_cancel',
        ],
    ]) ?>

</div>
