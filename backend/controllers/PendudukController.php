<?php

namespace backend\controllers;

use Yii;
use common\models\Penduduk;
use common\models\Query\PendudukSearch;
use common\models\Agama;
use common\models\Pekerjaan;
use common\models\Pendidikan;
use common\models\RtRw;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PendudukController implements the CRUD actions for Penduduk model.
 */
class PendudukController extends Controller
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
     * Lists all Penduduk models.
     * @return mixed
     */
    public function actionIndex()
    {
        Yii::$app->CheckRole->trigger(
            \common\components\BackendMiddleware::CheckOperatorOrNot
        );
        $searchModel = new PendudukSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Penduduk model.
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
     * Creates a new Penduduk model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        Yii::$app->CheckRole->trigger(
            \common\components\BackendMiddleware::CheckOperatorOrNot
        );
        $model = new Penduduk();
        $agama = Agama::find()->all();
        $pekerjaan = Pekerjaan::find()->all();
        $pendidikan = Pendidikan::find()->all();
        $RtRw = RtRw::find()->all();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
            'agama' => $agama,
            'pekerjaan' => $pekerjaan,
            'pendidikan' => $pendidikan,
            'RtRw' => $RtRw,
        ]);
    }

    /**
     * Updates an existing Penduduk model.
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
        $agama = Agama::find()->all();
        $pekerjaan = Pekerjaan::find()->all();
        $pendidikan = Pendidikan::find()->all();
        $RtRw = RtRw::find()->all();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
            'agama' => $agama,
            'pekerjaan' => $pekerjaan,
            'pendidikan' => $pendidikan,
            'RtRw' => $RtRw,
        ]);
    }

    /**
     * Deletes an existing Penduduk model.
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
     * Finds the Penduduk model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Penduduk the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Penduduk::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
