<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\MstCustType */

$this->title = 'Create Mst Cust Type';
$this->params['breadcrumbs'][] = ['label' => 'Mst Cust Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mst-cust-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
