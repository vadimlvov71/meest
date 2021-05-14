<?php

namespace app\controllers;

use Yii;
use app\models\Parcel;
use app\models\ParcelSearch;
use app\models\Category;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ParcelController implements the CRUD actions for Parcel model.
 */
class ParcelController extends Controller
{
    /**
     * {@inheritdoc}
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
     * Lists all Parcel models.
     * @return mixed
     */
    public function actionIndex()
    {
		$role = \Yii::$app->user->identity->role;
		$user_id = \Yii::$app->user->identity->id;
		if($role == 'client'){
			$searchModel = new ParcelSearch(['user_id' => $user_id]);
		}else{
			$searchModel = new ParcelSearch();
		}
		$model = new Parcel();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
		$arrayCategory = Category::find()->select('name')->indexBy('id')->column();
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'arrayCategory' => $arrayCategory,
            'model' => $model,
        ]);
    }

    /**
     * Displays a single Parcel model.
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
     * Creates a new Parcel model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Parcel();
        //$model->user_id = \Yii::$app->user->identity->id;
        
		$arrayCategory = Category::find()->select('name')->indexBy('id')->column();
      
		if (Yii::$app->request->isAjax && $model->load(Yii::$app->request->post())) {
			if($model->save()) {
				Yii::$app->session->setFlash('success', 'info of parcel has been created.');
				return $this->redirect(['/parcel/index'], 200);
			} else { 
				Yii::$app->response->format = Response::FORMAT_JSON;
				return ActiveForm::validate($model);
			}
		}
        return $this->renderAjax('create', [
            'model' => $model,
            'arrayCategory' => $arrayCategory,
        ]);
    }

    /**
     * Updates an existing Parcel model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
		$arrayCategory = Category::find()->select('name')->indexBy('id')->column();
        /*
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }
        * */
		if (Yii::$app->request->isAjax && $model->load(Yii::$app->request->post())) {
			if($model->save()) {
				Yii::$app->session->setFlash('success', 'info of parcel has been updated.');
				return $this->redirect(['/parcel/index'], 200);

			} else { 
				Yii::$app->response->format = Response::FORMAT_JSON;
				return ActiveForm::validate($model);
			}
		}
        return $this->renderAjax('update', [
            'model' => $model,
            'arrayCategory' => $arrayCategory,
        ]);
    }

    /**
     * Deletes an existing Parcel model.
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

    /**
     * Finds the Parcel model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Parcel the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Parcel::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
