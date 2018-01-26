<?php
namespace app\pocust\models\form;

use app\pocust\models\Purchaseordercustomer;
use app\pocust\models\Purchaseordercustomerdetail;
use Yii;
use yii\base\Model;
use yii\widgets\ActiveForm;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class PurchaseordercustomerForm extends Model
{
 
     private $_purchaseordercustomer;
    private $_purchaseordercustomerdetails;
    

    public function rules()
    {
        return [
            [['Purchaseordercustomer'], 'required'],
            [['Purchaseordercustomerdetails'], 'safe'],
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
        if (!$this->purchaseordercustomer->save()) {
            $transaction->rollBack();
            return false;
        }
        if (!$this->savePurchaseordercustomerdetails()) {
            $transaction->rollBack();
            return false;
        }
        
        
        $transaction->commit();
        return true;
    }
    
    public function savePurchaseordercustomerdetails() 
    {
        $keep = [];
        
        $time = new \DateTime('now', new \DateTimeZone('WIB'));
        
        foreach ($this->purchaseordercustomerdetails as $purchaseordercustomerdetail) {
           $purchaseordercustomerdetail->id_pocust_header = $this->purchaseordercustomer->id;
           $purchaseordercustomerdetail->created_by = Yii::$app->user->getUsername();
           $purchaseordercustomerdetail->created_date = $time->format('Y-m-d H:i:s');
           $purchaseordercustomerdetail->is_active = 1;
            if (!$purchaseordercustomerdetail->save(false)) {
                return false;
                
            }
            $keep[] = $purchaseordercustomerdetail->id;
        }
        $query = Purchaseordercustomerdetail::find()->andWhere(['id_pocust_header' => $this->purchaseordercustomer->id]);
        if ($keep) {
            $query->andWhere(['not in', 'id', $keep]); //ragu
        }
        foreach ($query->all() as $purchaseordercustomerdetail) {
            $purchaseordercustomerdetail->delete();
        }        
        return true;
    }


    public function getPurchaseordercustomer()
    {
        return $this->_purchaseordercustomer;
    }

    public function setPurchaseordercustomer($purchaseordercustomer)
    {
        if ($purchaseordercustomer instanceof Purchaseordercustomer) {
            $this->_purchaseordercustomer = $purchaseordercustomer;
        } else if (is_array($purchaseordercustomer)) {
            $this->_purchaseordercustomer->setAttributes($purchaseordercustomer);
        }
    }

     public function getPurchaseordercustomerdetails() //P BESAR Rendi
    {
        if ($this->_purchaseordercustomerdetails === null) {
            $this->_purchaseordercustomerdetails = $this->purchaseordercustomer->isNewRecord ? [] : $this->purchaseordercustomer->purchaseordercustomerdetails;
        }
        return $this->_purchaseordercustomerdetails;
    }

    private function getPurchaseordercustomerdetail($key) //P BESAR Rendi
    {
        $purchaseordercustomerdetail = $key && strpos($key, 'new') === false ? Purchaseordercustomerdetail::findOne($key) : false;
        if (!$purchaseordercustomerdetail) {
            $purchaseordercustomerdetail = new Purchaseordercustomerdetail();
            $purchaseordercustomerdetail->loadDefaultValues();
        }
        return $purchaseordercustomerdetail;
    }

    public function setPurchaseordercustomerdetails($purchaseordercustomerdetails) //P BESAR Rendi
    {
        unset($purchaseordercustomerdetails['__id__']); // remove the hidden "new Parcel" row
        $this->_purchaseordercustomerdetails = [];
        foreach ($purchaseordercustomerdetails as $key => $purchaseordercustomerdetails) {
            if (is_array($purchaseordercustomerdetails)) {
                $this->_purchaseordercustomerdetails[$key] = $this->getPurchaseordercustomerdetail($key);
                $this->_purchaseordercustomerdetails[$key]->setAttributes($purchaseordercustomerdetail);
            } elseif ($purchaseordercustomerdetail instanceof Purchaseordercustomerdetail) {
                $this->_purchaseordercustomerdetails[$purchaseordercustomerdetail->id] = $purchaseordercustomerdetail;
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
            'Purchaseordercustomer' => $this->purchaseordercustomer,
        ];
        foreach ($this->purchaseordercustomerdetails as $id => $purchaseordercustomerdetail) {
            $models['Purchaseordercustomerdetail.' . $id] = $this->purchaseordercustomerdetails[$id];
        }
        return $models;
    }
}