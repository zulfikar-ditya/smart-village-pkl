<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\RtRw */

$this->title = 'Rt Rw '.$model->id;
$this->params['breadcrumbs'][] = ['label' => 'Rt Rws', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="rt-rw-view">

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
            'rw_parent',
            'rt_child',
            'dusun_id',
            // [
            //     'attribute' => 'Dusun',
            //     'value' => function ($model) {
            //         return Html::encode($model->getDusun()->all()[0]['nama_dusun']);
            //     }
            // ],
        ],
    ]) ?>

</div>
