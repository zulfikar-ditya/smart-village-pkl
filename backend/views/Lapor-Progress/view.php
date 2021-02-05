<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\LaporProgress */

$this->title = 'Lapor Progresse '.$model->id;
$this->params['breadcrumbs'][] = ['label' => 'Lapor Progresses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="lapor-progress-view">

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
            [
                'attribute' => 'Image',
                'value' => $model->image,
                'format' => ['image', ['width' =>  '150px', 'height'=> '100px']],
            ],
            'tanggal',
            'capaian_progress',
            'uraian_pekerjaan:ntext',
            [
                'attribute' => 'Pembangunan Id',
                'value' => function ($model) {
                    return Html::encode($model->getPembangunan()->all()[0]['nama_pembangunan']);
                },
            ],
        ],
    ]) ?>

</div>
