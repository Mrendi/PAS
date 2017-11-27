<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\master\models\MstCabang */

$this->title = 'Create Mst Cabang';
$this->params['breadcrumbs'][] = ['label' => 'Mst Cabangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mst-cabang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
