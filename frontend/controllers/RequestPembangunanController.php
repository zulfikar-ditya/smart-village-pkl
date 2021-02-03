<?php

namespace frontend\controllers;

use Yii;
use common\models\RequestPembangunan;
use common\models\KategoriPembangunan;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RequestPembangunanController implements the CRUD actions for RequestPembangunan model.
 */
class RequestPembangunanController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
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
     * Lists all RequestPembangunan models.
     * @return mixed
     */
    public function actionIndex()
    {
        $data = RequestPembangunan::find()->where(['user_id' => Yii::$app->user->identity->id]);
        $pages = new \yii\data\Pagination(
            [
                'totalCount' => $data->count(),
                'pageSize' => 25
            ]
        );
        $models = $data->offset($pages->offset)->limit($pages->limit)->orderBy(['id' => SORT_DESC])->all();

        return $this->render('index', [
            'data' => $models,
            'pages' => $pages,
        ]);
    }

    /**
     * Displays a single RequestPembangunan model.
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
     * Creates a new RequestPembangunan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new RequestPembangunan();
        $kategoriPembangunan = \common\models\KategoriPembangunan::find()->all();

        if (Yii::$app->request->isPost) {
            $request = Yii::$app->request->post('RequestPembangunan');
            $model->judul = $request['judul'];
            $model->deskripsi = $request['deskripsi'];
            $model->kategori_pembangunan_id = $request['kategori_pembangunan_id'];
            $model->status = $request['status'];
            $model->user_id = Yii::$app->user->identity->id;
            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
            'kategoryPembangunan' => $kategoriPembangunan
        ]);
    }

    /**
     * Updates an existing RequestPembangunan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $model = $this->findModel($id);
        $kategoriPembangunan = \common\models\KategoriPembangunan::find()->all();

        if (Yii::$app->request->isPost) {
            $request = Yii::$app->request->post('RequestPembangunan');
            $model->judul = $request['judul'];
            $model->deskripsi = $request['deskripsi'];
            $model->kategori_pembangunan_id = $request['kategori_pembangunan_id'];
            $model->status = $request['status'];
            $model->user_id = Yii::$app->user->identity->id;
            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
            'kategoryPembangunan' => $kategoriPembangunan
        ]);
    }

    /**
     * Deletes an existing RequestPembangunan model.
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
     * Finds the RequestPembangunan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return RequestPembangunan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = RequestPembangunan::findOne($id)) !== null) {
            if ($model->user_id == Yii::$app->user->identity->id) {
                return $model;
            } else {
                throw new NotFoundHttpException('This data is not yours');
            }
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
