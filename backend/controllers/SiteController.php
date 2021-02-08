<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use common\models\Pembangunan;
use common\models\user;
use common\models\RtRw;
use common\models\dusun;
use common\models\Penduduk;
use common\models\LaporAduan;
use common\models\RequestPembangunan;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        Yii::$app->CheckRole->trigger(
            \common\components\BackendMiddleware::CheckOperatorOrNot
        );
        $user = User::find()->count();
        $RtRw = RtRw::find()->count();
        $dusun = Dusun::find()->count();

        $pembangunan = Pembangunan::find();
        $pages = new \yii\data\Pagination([
            'totalCount' => $pembangunan->count(),
            'pageSize' => 4
        ]);
        $dataPembangunan = $pembangunan->offset($pages->offset)->limit($pages->limit)->orderBy(['id' => SORT_DESC])->all();

        $laporAduan = LaporAduan::find();
        $pages = new \yii\data\Pagination([
            'totalCount' => $laporAduan->count(),
            'pageSize' => 4
        ]);
        $dataLaporAduan = $laporAduan->offset($pages->offset)->limit($pages->limit)->orderBy(['id' => SORT_DESC])->where(['status' => 'laporanbaru'])->all();

        $requestPembangunan = RequestPembangunan::find();
        $pages = new \yii\data\Pagination([
            'totalCount' => $requestPembangunan->count(),
            'pageSize' => 4
        ]);
        $dataRequestPembangunan = $requestPembangunan->offset($pages->offset)->limit($pages->limit)->orderBy(['id' => SORT_DESC])->where(['status' => 'requestbaru'])->all();

        return $this->render('index', [
            'user' => $user,
            'RtRw' => $RtRw,
            'dusun' => $dusun,

            'dataPembangunan' => $dataPembangunan,
            'dataLaporAduan' => $dataLaporAduan,
            'dataRequestPembangunan' => $dataRequestPembangunan,

            'penduduk' => Penduduk::find()->count(),
            'laporAduan' => LaporAduan::find()->where(['status' => 'laporanbaru'])->count(),
            'requestPembangunan' => RequestPembangunan::find()->where(['status' => 'requestbaru'])->count(),
            'countPembangunan' => Pembangunan::find()->where(['status_pembangunan_id' => '1'])->count(),
        ]);
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $this->layout = 'blank';

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
