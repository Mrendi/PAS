<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\material\models\MstSourceItem */

$this->title = 'Create Mst Source Item';
$this->params['breadcrumbs'][] = ['label' => 'Mst Source Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mst-source-item-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
