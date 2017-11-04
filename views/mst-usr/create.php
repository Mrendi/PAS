<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\MstUsr */

$this->title = 'Create Mst Usr';
$this->params['breadcrumbs'][] = ['label' => 'Mst Usrs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mst-usr-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
