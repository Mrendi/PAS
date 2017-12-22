<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\timbangan\models\TrTimbangan */

$this->title = 'Timbangan';
$this->params['breadcrumbs'][] = ['label' => 'Timbangan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tr-timbangan-create">

    <br><br>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
