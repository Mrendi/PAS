<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\master\models\MstUsrPrivilages */

$this->title = 'Create Mst Usr Privilages';
$this->params['breadcrumbs'][] = ['label' => 'Mst Usr Privilages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mst-usr-privilages-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
