<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\proyek\models\MstCustomerPas */

$this->title = 'Create Mst Customer Pas';
$this->params['breadcrumbs'][] = ['label' => 'Mst Customer Pas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mst-customer-pas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
