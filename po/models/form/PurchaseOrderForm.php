<?php
namespace app\po\models\form;

use app\po\models\Purchaseorder;
use app\po\models\Purchaseorderdetail;
use Yii;
use yii\base\Model;
use yii\widgets\ActiveForm;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class PurchaseorderForm extends Model
{
 
     private $_purchaseorder;
    private $_purchaseorderdetails;
    

    public function rules()
    {
        return [
            [['Purchaseorder'], 'required'],
            [['Purchaseorderdetails'], 'safe'],
        ];
    }
    
    
    
    public function afterValidate()
    {
        if (!Model::validateMultiple($this->getAllModels())) {
            $this->addError(null); // add an empty error to prevent saving
        }
        parent::afterValidate();
    }

     public function save()
    {
        if (!$this->validate()) {
            return false;
        }
        $transaction = Yii::$app->db->beginTransaction();
        if (!$this->purchaseorder->save()) {
            $transaction->rollBack();
            return false;
        }
        if (!$this->savePurchaseorderdetails()) {
            $transaction->rollBack();
            return false;
        }
        
        
        $transaction->commit();
        return true;
    }
    
    public function savePurchaseorderdetails() 
    {
        $keep = [];
        
        $time = new \DateTime('now', new \DateTimeZone('WIB'));
        
        foreach ($this->purchaseorderdetails as $purchaseorderdetail) {
           $purchaseorderdetail->id_po_header = $this->purchaseorder->id;
           $purchaseorderdetail->created_by = Yii::$app->user->getUsername();
           $purchaseorderdetail->created_date = $time->format('Y-m-d H:i:s');
           $purchaseorderdetail->is_active = 1;
            if (!$purchaseorderdetail->save(false)) {
                return false;
                
            }
            $keep[] = $purchaseorderdetail->id;
        }
        $query = Purchaseorderdetail::find()->andWhere(['id_po_header' => $this->purchaseorder->id]);
        if ($keep) {
            $query->andWhere(['not in', 'id', $keep]); //ragu
        }
        foreach ($query->all() as $purchaseorderdetail) {
            $purchaseorderdetail->delete();
        }        
        return true;
    }


    public function getPurchaseorder()
    {
        return $this->_purchaseorder;
    }

    public function setPurchaseorder($purchaseorder)
    {
        if ($purchaseorder instanceof Purchaseorder) {
            $this->_purchaseorder = $purchaseorder;
        } else if (is_array($purchaseorder)) {
            $this->_purchaseorder->setAttributes($purchaseorder);
        }
    }

     public function getPurchaseorderdetails() //P BESAR Rendi
    {
        if ($this->_purchaseorderdetails === null) {
            $this->_purchaseorderdetails = $this->purchaseorder->isNewRecord ? [] : $this->purchaseorder->purchaseorderdetails;
        }
        return $this->_purchaseorderdetails;
    }

    private function getPurchaseorderdetail($key) //P BESAR Rendi
    {
        $purchaseorderdetail = $key && strpos($key, 'new') === false ? Purchaseorderdetail::findOne($key) : false;
        if (!$purchaseorderdetail) {
            $purchaseorderdetail = new Purchaseorderdetail();
            $purchaseorderdetail->loadDefaultValues();
        }
        return $purchaseorderdetail;
    }

    public function setPurchaseorderdetails($purchaseorderdetails) //P BESAR Rendi
    {
        unset($purchaseorderdetails['__id__']); // remove the hidden "new Parcel" row
        $this->_purchaseorderdetails = [];
        foreach ($purchaseorderdetails as $key => $purchaseorderdetail) {
            if (is_array($purchaseorderdetail)) {
                $this->_purchaseorderdetails[$key] = $this->getPurchaseorderdetail($key);
                $this->_purchaseorderdetails[$key]->setAttributes($purchaseorderdetail);
            } elseif ($purchaseorderdetail instanceof Purchaseorderdetail) {
                $this->_purchaseorderdetails[$purchaseorderdetail->id] = $purchaseorderdetail;
            }
        }
    }

    public function errorSummary($form)
    {
        $errorLists = [];
        foreach ($this->getAllModels() as $id => $model) {
            $errorList = $form->errorSummary($model, [
              'header' => '<p>Please fix the following errors for <b>' . $id . '</b></p>',
            ]);
            $errorList = str_replace('<li></li>', '', $errorList); // remove the empty error
            $errorLists[] = $errorList;
        }
        return implode('', $errorLists);
    }

    private function getAllModels()
    {
        $models = [
            'Purchaseorder' => $this->purchaseorder,
        ];
        foreach ($this->purchaseorderdetails as $id => $purchaseorderdetail) {
            $models['Purchaseorderdetail.' . $id] = $this->purchaseorderdetails[$id];
        }
        return $models;
    }
}