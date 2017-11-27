<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\timbangan\models\TrTimbangan */

$this->title = 'Create Tr Timbangan';
$this->params['breadcrumbs'][] = ['label' => 'Tr Timbangans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tr-timbangan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
