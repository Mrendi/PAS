<?php
namespace app\pocust\controllers;

use app\pocust\models\form\PurchaseordercustomerForm;
use app\pocust\models\Purchaseordercustomer;
use app\pocust\models\PurchaseordercustomerSearch;

use app\material\models\MstSupplierSearch;

use Yii;
use yii\web\Controller;
use yii\web\HttpException;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class PurchaseordercustomerController extends Controller
{
    public function actionCreate()
    {
        $model = new PurchaseordercustomerForm();
        $model->purchaseordercustomer = new PurchaseOrderCustomer;
        $model->purchaseordercustomer->loadDefaultValues();
        $model->setAttributes(Yii::$app->request->post());
        
        if (Yii::$app->request->isPost) {
            $model->load(Yii::$app->request->post());
                
            $time = new \DateTime('now', new \DateTimeZone('WIB'));
            
            $model->purchaseordercustomer->created_by = Yii::$app->user->getUsername();
            $model->purchaseordercustomer->created_date = $time->format('Y-m-d H:i:s');
            $model->purchaseordercustomer->pocust_date = date("Y-m-d");
            $model->purchaseordercustomer->total_pocust = 1000; // active
            $model->purchaseordercustomer->is_active = 1; // active
            
            
           $model->save();
            Yii::$app->getSession()->setFlash('success', 'Purchase Order has been created.');
            return $this->redirect(['update', 'id' => $model->purchaseordercustomer->id]);
        }
        return $this->render('create', ['model' => $model]);
    }
    
    
    
    public function actionUpdate($id)
    {
        $model = new PurchaseordercustomerForm();
        $model->purchaseordercustomer = $this->findModel($id);
        $model->setAttributes(Yii::$app->request->post());
        
        if (Yii::$app->request->isPost){
            $model->load(Yii::$app->request->post());
            $model->save();
            Yii::$app->getSession()->setFlash('success', 'Purchase Order has been updated.');
            return $this->redirect(['update', 'id' => $model->purchaseordercustomer->id]);
            
        }else{
        $SupplierDetail = MstSupplierSearch::getSuppbycode($model->purchaseordercustomer->supplier_code);
        //var_dump($SupplierDetail);
        //var_dump($model->purchaseorder->supplier_code);
        $model->purchaseordercustomer->supplier_code = $SupplierDetail->supplier_name;
        }
        
        return $this->render('update', ['model' => $model]);
    }
    
    protected function findModel($id)
    {
        if (($model = Purchaseordercustomer::findOne($id)) !== null) {
            return $model;
        }
        throw new HttpException(404, 'The requested page does not exist.');
    }
    
    // Rendi tambah untuk PO
     public function actionLookuppo()
    {
        $searchModel = new PurchaseordercustomerSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->renderAjax('..\..\..\lookup\lookuppo', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
}