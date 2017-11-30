<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\material\models\MstSupplierSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Master Suppliers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mst-supplier-index">

    
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Supplier', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'supplier_code',
            'supplier_name',
            'description',
            'created_by',
            'created_date',
            // 'modified_by',
            // 'modified_date',
            // 'status',
            // 'supp_type',
            // 'initial_po',
            // 'sales_name',
            // 'address_supplier',
            // 'telephon_supplier',
            // 'fax_supplier',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
