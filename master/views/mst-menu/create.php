<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\master\models\MstMenu */

$this->title = 'Create Mst Menu';
$this->params['breadcrumbs'][] = ['label' => 'Mst Menus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mst-menu-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
