<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\RequestPembangunan */

$this->title = 'Request Pembangunan '.$model->id;
$this->params['breadcrumbs'][] = ['label' => 'Request Pembangunans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="request-pembangunan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'judul',
            'deskripsi:ntext',
            [
                'attribute' => 'user',
                'value' => function ($model) {
                    return $model->user->username;
                }
            ],
            [
                'attribute' => 'kategori pembangunan',
                'value' => function($model) {
                    return $model->kategoriPembangunan->nama;
                }
            ],
            'status',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
