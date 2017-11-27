<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\master\models\MstGroup */

$this->title = 'Create Mst Group';
$this->params['breadcrumbs'][] = ['label' => 'Mst Groups', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mst-group-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
