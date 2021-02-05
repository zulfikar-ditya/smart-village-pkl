<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Penduduk */

$this->title = 'Penduduk'.$model->id;
$this->params['breadcrumbs'][] = ['label' => 'Penduduks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="penduduk-view">

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
            'nik',
            'nama_lengkap',
            'tempat_lahir',
            'tanggal_lahir',
            'jenis_kelamin',
            [
                'attribute' => 'Agama',
                'value' => function ($model) {
                    return Html::encode($model->getAgama()->all()[0]['nama']);
                }
            ],
            'status_perkawinan',
            [
                'attribute' => 'Pekerjaan',
                'value' => function ($model) {
                    return Html::encode($model->getPekerjaan()->all()[0]['nama']);
                }
            ],
            [
                'attribute' => 'Pendikan',
                'value' => function ($model) {
                    return Html::encode($model->getPendidikan()->all()[0]['nama']);
                }
            ],
            [
                'attribute' => 'Rt/Rw',
                'value' => function ($model) {
                    return Html::encode(
                        $model->getRtRw()->all()[0]['rw_parent'].'/'
                        .Html::encode($model->getRtRw()->all()[0]['rt_child'])
                    );
                }
            ],
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
