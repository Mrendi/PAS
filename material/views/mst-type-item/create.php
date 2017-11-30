<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\material\models\MstTypeItem */

$this->title = 'Create Mst Type Item';
$this->params['breadcrumbs'][] = ['label' => 'Mst Type Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mst-type-item-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
