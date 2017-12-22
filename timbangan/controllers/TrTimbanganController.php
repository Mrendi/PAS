<?php

namespace app\timbangan\controllers;

use Yii;
use app\timbangan\models\TrTimbangan;
use app\timbangan\models\TrTimbanganSearch;
use app\master\models\MstCabang;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TrTimbanganController implements the CRUD actions for TrTimbangan model.
 */
class TrTimbanganController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all TrTimbangan models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TrTimbanganSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
         //echo var_dump($dataProvider);
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TrTimbangan model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new TrTimbangan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new TrTimbangan();
        
        if (Yii::$app->request->isPost)
        {
            $data = Yii::$app->request->post('TrTimbangan');
            $no_tr_timbangan = $data["no_tr_timbangan"];
            
            if (empty($no_tr_timbangan)) {
                
                $model = new TrTimbangan();

            }
            else
            {
               
                $model = $this->findModel(['no_tr_timbangan' => $no_tr_timbangan]);

            }
        }
        
        //$model = new TrTimbangan();
        $CabangDetail = MstCabang::findOne(Yii::$app->user->getBranchCode());
        
        if (Yii::$app->request->isPost){
                $model->load(Yii::$app->request->post());
               
                $datetime = date("d-m-Y");
                $date_arr= explode("-", $datetime);
                $date= $date_arr[0];
                $month= $date_arr[1];
                $year= $date_arr[2];
                
                $time = new \DateTime('now', new \DateTimeZone('WIB'));
                
                $model->kode_cab = Yii::$app->user->getBranchCode();
                $model->tanggal = date("Y-m-d");
                $model->in_datetime = $time->format('Y-m-d H:i:s'); //date("Y-m-d h:i:s");
                if ($model->out_jml_berat != 0){
                    $model->out_datetime = $time->format('Y-m-d H:i:s'); //date("Y-m-d h:i:s");
                }
                
                
                $model->upd_by = Yii::$app->user->getUsername();
                $model->no_tr_timbangan = Yii::$app->user->getBranchCode().''.$year.''.$month.''.$date ;
                $model->kode_barcode = Yii::$app->user->getBranchCode().''.$year.''.$month.''.$date ;
                    
               
                $model->save(false);
                return $this->redirect(['view', 'id' => $model->no_tr_timbangan]);
                
        } else {
            $model->kode_cab = $CabangDetail->nama_cab;
            $model->tanggal = date("d-m-Y");
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing TrTimbangan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if (Yii::$app->request->isPost) {
            $model->load(Yii::$app->request->post());
            
            $model->save(false);
            return $this->redirect(['view', 'id' => $model->no_tr_timbangan]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing TrTimbangan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TrTimbangan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return TrTimbangan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = TrTimbangan::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    
    public function actionLookuptruck()
    {
        $searchModel = new TrTimbanganSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->where('out_datetime is null and in_datetime is not null');
         //echo var_dump($dataProvider);
        return $this->renderAjax('..\..\..\lookup\lookuptruck', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
}
