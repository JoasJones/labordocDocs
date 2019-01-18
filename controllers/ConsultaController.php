<?php

namespace app\controllers;

use Yii;
use app\models\ConsultaModel;
use app\models\ConsultaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ConsultaController implements the CRUD actions for ConsultaModel model.
 */
class ConsultaController extends Controller
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
     * Lists all ConsultaModel models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ConsultaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ConsultaModel model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
            
        ]);
    }

    /**
     * Creates a new ConsultaModel model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ConsultaModel();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {


            $model->documento = UploadedFile::getInstance($model, 'documento');
            if($model->documento != null) {
                $arquivo = $model->titulares . '_' . $model->idConsulta;
                $model->documento->saveAs('repositorio/' . $arquivo . '.' . $model->documento->extension);
                $model->url = 'repositorio/' . $arquivo . '.' . $model->documento->extension;
            }
            $model->save();

            return $this->redirect(['view', 'id' => $model->idConsulta]);
        }

        return $this->render('create', [
            'model' => $model,
            
        ]);
    }

    /**
     * Updates an existing ConsultaModel model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            $model->documento = UploadedFile::getInstance($model, 'documento');
            if($model->documento != null) {
                $arquivo = $model->titulares . '_' . $model->idConsulta;
                $model->documento->saveAs('repositorio/' . $arquivo . '.' . $model->documento->extension);
                $model->url = 'repositorio/' . $arquivo . '.' . $model->documento->extension;
            }
            $model->save();

            return $this->redirect(['view', 'id' => $model->idConsulta]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing ConsultaModel model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }
    
    
    public function actionDonwload($id)
    {
      
        $model = $this->findModel($id);
        if($model->documento!=null){
            $local =  YII::getAlias('@webroot').'/repositorio/';
            //echo "$local";
            $nome = $model->documento;
            $arquivo = $local.$nome;
            if(file_exists($arquivo)){
                YII::$app->response->sendFile($arquivo);
            }else{
                throw new NotFoundHttpException('Arquivo não encontrado: '.$nome);
                }
                
        }else {
            throw new NotFoundHttpException('Não há arquivos para download:');
        }
    }

    /**
     * Finds the ConsultaModel model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return ConsultaModel the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ConsultaModel::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
