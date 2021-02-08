<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Penduduk */

$this->title = 'Penduduk    '.$model->id;
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
            // 'agama_id',
            [
                'attribute' => 'Agama',
                'value' => function ($model) {
                    return $model->agama->nama;
                }
            ],
            'status_perkawinan',
            // 'pekerjaan_id',
            // 'pendidikan_id',
            // 'rt_rw_id',
            [
                'attribute' => 'Pekerjaan',
                'value' => function ($model) {
                    return $model->pekerjaan->nama;
                }
            ],
            [
                'attribute' => 'Pendikan',
                'value' => function ($model) {
                    return $model->pendidikan->nama;
                }
            ],
            [
                'attribute' => 'Rt/Rw',
                'value' => function ($model) {
                    return Html::encode(
                        $model->rtRw->rw_parent.'/'
                        .$model->rtRw->rt_child
                    );
                }
            ],
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
