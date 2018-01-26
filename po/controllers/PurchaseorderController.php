<?php
namespace app\po\controllers;

use app\po\models\form\PurchaseorderForm;
use app\po\models\Purchaseorder;
use app\po\models\PurchaseorderSearch;

use app\material\models\MstSupplierSearch;

use Yii;
use yii\web\Controller;
use yii\web\HttpException;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class PurchaseorderController extends Controller
{
    public function actionCreate()
    {
        $model = new PurchaseorderForm();
        $model->purchaseorder = new PurchaseOrder;
        $model->purchaseorder->loadDefaultValues();
        $model->setAttributes(Yii::$app->request->post());
        
        if (Yii::$app->request->isPost) {
            $model->load(Yii::$app->request->post());
                
            $time = new \DateTime('now', new \DateTimeZone('WIB'));
            
            $model->purchaseorder->created_by = Yii::$app->user->getUsername();
            $model->purchaseorder->created_date = $time->format('Y-m-d H:i:s');
            $model->purchaseorder->po_date = date("Y-m-d");
            $model->purchaseorder->total_po = 1000; // active
            $model->purchaseorder->is_active = 1; // active
            
            
           $model->save();
            Yii::$app->getSession()->setFlash('success', 'Purchase Order has been created.');
            return $this->redirect(['update', 'id' => $model->purchaseorder->id]);
        }
        return $this->render('create', ['model' => $model]);
    }
    
    
    
    public function actionUpdate($id)
    {
        $model = new PurchaseorderForm();
        $model->purchaseorder = $this->findModel($id);
        $model->setAttributes(Yii::$app->request->post());
        
        if (Yii::$app->request->isPost){
            $model->load(Yii::$app->request->post());
            $model->save();
            Yii::$app->getSession()->setFlash('success', 'Purchase Order has been updated.');
            return $this->redirect(['update', 'id' => $model->purchaseorder->id]);
            
        }else{
        $SupplierDetail = MstSupplierSearch::getSuppbycode($model->purchaseorder->supplier_code);
        //var_dump($SupplierDetail);
        //var_dump($model->purchaseorder->supplier_code);
        $model->purchaseorder->supplier_code = $SupplierDetail->supplier_name;
        }
        
       
        return $this->render('update', ['model' => $model]);
    }
    
    protected function findModel($id)
    {
        if (($model = Purchaseorder::findOne($id)) !== null) {
            return $model;
        }
        throw new HttpException(404, 'The requested page does not exist.');
    }
    
    // Rendi tambah untuk PO
     public function actionLookuppo()
    {
        $searchModel = new PurchaseorderSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->renderAjax('..\..\..\lookup\lookuppo', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
}