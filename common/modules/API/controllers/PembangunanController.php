<?php

namespace common\modules\API\controllers;

use Yii;
use common\models\Pembangunan;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PembangunanController implements the CRUD actions for Pembangunan model.
 */
class PembangunanController extends Controller
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
     * Lists all Pembangunan models.
     * @return mixed
     */
    public function actionIndex()
    {
        $data = Pembangunan::find()->orderBy(['id' => SORT_DESC])->one();
        // return json_encode($data);
        return var_dump($data);
        // return var_dump(
        //     [
        //         'message' => true,
        //         'data' => [
        //             'id' => $data['id'],
        //             'nama_pembangunan' => $data['nama_pembangunan'],
        //             'foto' => $data['foto'],
        //             'anggaran' => $data['anggaran'],
        //             'tgl_mulai' => $data['tgl_mulai'],
        //             'tgl_selesai' => $data['tgl_selesai'],
        //             'longitude' => $data['longitude'],
        //             'latitude' => $data['latitude'],
        //             'prosentase' => $data['prosentase'],
        //             'sumber_dana_pembangunan_id' => $data['sumber_dana_pembangunan_id'],
        //             'kategori_pembangunan_id' => $data['kategori_pembangunan_id'],
        //             'status_pembangunan_id' => $data['status_pembangunan_id'],
        //             'users_id' => $data['user_id'],
        //             'mitra_id' => $data['mitra_id'],
        //             'created_at' => $data['created_at'],
        //             'updated_at' => $data['updated_at'],
        //         ],
        //     ]
        // );
    }

    /**
     * Displays a single Pembangunan model.
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
     * Creates a new Pembangunan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Pembangunan();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Pembangunan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Pembangunan model.
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
     * Finds the Pembangunan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Pembangunan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Pembangunan::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
