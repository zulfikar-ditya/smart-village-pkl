<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\Query\RequestPembangunanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Request Pembangunan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="request-pembangunan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Request Pembangunan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'judul',
            // 'deskripsi:ntext',
            // 'user_id',
            // 'kategori_pembangunan_id',
            'status',
            //'created_at',
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
