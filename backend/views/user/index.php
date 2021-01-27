<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\Query\UserAdminSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'User Admins';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-admin-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'roles_id',
            'name',
            'username',
            // 'password',
            //'auth_key',
            //'password_reset_token',
            //'access_token',
            'email:email',
            //'photo',
            //'last_login',
            //'penduduk_id',
            //'created_at',
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
