<?php
namespace app\po\controllers;

use app\po\models\form\PurchaseOrderForm;
use app\po\models\PurchaseOrder;
use Yii;
use yii\web\Controller;
use yii\web\HttpException;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class PurchaseOrderController extends Controller
{
    public function actionCreate()
    {
        $model = new PurchaseOrderForm();
        $model->purchaseorder = new PurchaseOrder;
        $model->purchaseorder->loadDefaultValues();
        $model->setAttributes(Yii::$app->request->post());
        
        if (Yii::$app->request->isPost) {
            $model->load(Yii::$app->request->post());
                
            $model->purchaseorder->created_by = Yii::$app->user->getUsername();
            $model->purchaseorder->created_date = date("Y-m-d");
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
        $model = new PurchaseOrderForm();
        $model->purchaseorder = $this->findModel($id);
        $model->setAttributes(Yii::$app->request->post());
        
        if (Yii::$app->request->post() && $model->save()) {
            Yii::$app->getSession()->setFlash('success', 'Purchase Order has been updated.');
            return $this->redirect(['update', 'id' => $model->purchaseorder->id]);
        }
        return $this->render('update', ['model' => $model]);
    }
    
    protected function findModel($id)
    {
        if (($model = PurchaseOrder::findOne($id)) !== null) {
            return $model;
        }
        throw new HttpException(404, 'The requested page does not exist.');
    }
    
    
}