<?php

namespace backend\controllers;

use Yii;
use common\models\LaporAduan;
use common\models\Query\LaporAduanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * LaporAduanController implements the CRUD actions for LaporAduan model.
 */
class LaporAduanController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            \yii\behaviors\TimestampBehavior::className(),
            'access' => [
                'class' => \yii\filters\AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['logout', 'index', 'create', 'view', 'update', 'delete'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all LaporAduan models.
     * @return mixed
     */
    public function actionIndex()
    {
        Yii::$app->CheckRole->trigger(
            \common\components\BackendMiddleware::CheckOperatorOrNot
        );
        $searchModel = new LaporAduanSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single LaporAduan model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        Yii::$app->CheckRole->trigger(
            \common\components\BackendMiddleware::CheckOperatorOrNot
        );
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new LaporAduan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        Yii::$app->CheckRole->trigger(
            \common\components\BackendMiddleware::CheckOperatorOrNot
        );
        $model = new LaporAduan();

        if (Yii::$app->request->isPost) {
            $request = Yii::$app->request->post('LaporAduan');
            $model->deskripsi = $request['deskripsi'];
            $model->pembangunan_id = $request['pembangunan_id'];
            $model->status = $request['status'];
            $model->user_id = Yii::$app->user->identity->id;

            $model->foto = UploadedFile::getInstance($model, 'foto');
            $imageName = time().'.'.$model->foto->getExtension();
            $imagePath = 'image/aduan/'.$imageName;

            $model->foto->saveAs($imagePath);
            $model->foto = $imagePath;

            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing LaporAduan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        Yii::$app->CheckRole->trigger(
            \common\components\BackendMiddleware::CheckOperatorOrNot
        );
        $model = $this->findModel($id);

        if (Yii::$app->request->isPost) {
            $request = Yii::$app->request->post('LaporAduan');
            $model->deskripsi = $request['deskripsi'];
            $model->pembangunan_id = $request['pembangunan_id'];
            $model->status = $request['status'];

            $model->foto = UploadedFile::getInstance($model, 'foto');
            $imageName = time().'.'.$model->foto->getExtension();
            $imagePath = 'image/aduan/'.$imageName;

            $model->foto->saveAs($imagePath);
            $model->foto = $imagePath;

            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing LaporAduan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        Yii::$app->CheckRole->trigger(
            \common\components\BackendMiddleware::CheckOperatorOrNot
        );
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the LaporAduan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return LaporAduan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = LaporAduan::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
