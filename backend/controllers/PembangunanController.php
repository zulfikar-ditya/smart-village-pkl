<?php

namespace backend\controllers;

use Yii;
use common\models\Pembangunan;
use common\models\Query\PembangunanSearch;
use common\models\SumberDanaPembangunan;
use common\models\KategoriPembangunan;
use common\models\StatusPembangunan;
use common\models\Mitra;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

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
     * Lists all Pembangunan models.
     * @return mixed
     */
    public function actionIndex()
    {
        Yii::$app->CheckRole->trigger(
            \common\components\BackendMiddleware::CheckOperatorOrNot
        );
        $searchModel = new PembangunanSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Pembangunan model.
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
     * Creates a new Pembangunan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        Yii::$app->CheckRole->trigger(
            \common\components\BackendMiddleware::CheckOperatorOrNot
        );
        $model = new Pembangunan();
        $sumberDana = SumberDanaPembangunan::find()->all();
        $statusPembangunan = StatusPembangunan::find()->all();
        $mitra = Mitra::find()->all();
        $kategoriPembangunan = KategoriPembangunan::find()->all();

        if (Yii::$app->request->isPost) {
            $request = Yii::$app->request->post('Pembangunan');

            $model->nama_pembangunan = $request['nama_pembangunan'];
            $model->anggaran = $request['anggaran'];
            $model->tgl_mulai = $request['tgl_mulai'];
            $model->tgl_selesai = $request['tgl_selesai'];
            $model->longitude = $request['longitude'];
            $model->latitude = $request['latitude'];
            $model->keterangan = $request['keterangan'];
            $model->prosentase = $request['prosentase'];
            $model->sumber_dana_pembangunan_id = $request['sumber_dana_pembangunan_id'];
            $model->kategori_pembangunan_id = $request['kategori_pembangunan_id'];
            $model->status_pembangunan_id = $request['status_pembangunan_id'];
            $model->mitra_id = $request['mitra_id'];
            $model->user_id = Yii::$app->user->identity->id;

            $model->foto = uploadedFile::getInstance($model, 'foto');
            $model->foto = UploadedFile::getInstance($model, 'foto');
            $imageName = time().'.'.$model->foto->getExtension();
            $imagePath = 'image/pembangunan/'.$imageName;
            $model->foto->saveAs($imagePath);
            $model->foto = $imagePath;

            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
            'sumberDana' => $sumberDana,
            'statusPembangunan' => $statusPembangunan,
            'mitra' => $mitra,
            'kategoriPembangunan' => $kategoriPembangunan
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
        Yii::$app->CheckRole->trigger(
            \common\components\BackendMiddleware::CheckOperatorOrNot
        );
        $model = $this->findModel($id);
        $sumberDana = SumberDanaPembangunan::find()->all();
        $statusPembangunan = StatusPembangunan::find()->all();
        $mitra = Mitra::find()->all();
        $kategoriPembangunan = KategoriPembangunan::find()->all();

        if (Yii::$app->request->isPost) {
            $request = Yii::$app->request->post('Pembangunan');

            $model->nama_pembangunan = $request['nama_pembangunan'];
            $model->anggaran = $request['anggaran'];
            $model->tgl_mulai = $request['tgl_mulai'];
            $model->tgl_selesai = $request['tgl_selesai'];
            $model->longitude = $request['longitude'];
            $model->latitude = $request['latitude'];
            $model->keterangan = $request['keterangan'];
            $model->prosentase = $request['prosentase'];
            $model->sumber_dana_pembangunan_id = $request['sumber_dana_pembangunan_id'];
            $model->kategori_pembangunan_id = $request['kategori_pembangunan_id'];
            $model->status_pembangunan_id = $request['status_pembangunan_id'];
            $model->mitra_id = $request['mitra_id'];
            $model->user_id = Yii::$app->user->identity->id;

            $model->foto = uploadedFile::getInstance($model, 'foto');
            $model->foto = UploadedFile::getInstance($model, 'foto');
            $imageName = time().'.'.$model->foto->getExtension();
            $imagePath = 'image/pembangunan/'.$imageName;
            $model->foto->saveAs($imagePath);
            $model->foto = $imagePath;

            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
            'sumberDana' => $sumberDana,
            'statusPembangunan' => $statusPembangunan,
            'mitra' => $mitra,
            'kategoriPembangunan' => $kategoriPembangunan
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
        Yii::$app->CheckRole->trigger(
            \common\components\BackendMiddleware::CheckOperatorOrNot
        );
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
