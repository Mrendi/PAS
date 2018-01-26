<?php


use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Modal;
use yii\widgets\Pjax;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MstPacketProject */


?>
<div class="mst-packet-project-create">

    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
