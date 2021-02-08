<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Pembangunan */

$this->title = 'Pembangunan '.$model->id;
$this->params['breadcrumbs'][] = ['label' => 'Pembangunans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="container">

    <div class="pembangunan-view">
    
        <h1><?= Html::encode($this->title) ?></h1>
    
        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                'id',
                'nama_pembangunan',
                'foto',
                'anggaran',
                'tgl_mulai',
                'tgl_selesai',
                'longitude',
                'latitude',
                'keterangan',
                'prosentase',
                [
                    'attribute' => 'Sumber Dana Pembangunan',
                    'value' => function ($model) {
                        return $model->sumberDanaPembangunan->nama;
                    }
                ],
                [
                    'attribute' => 'Kategori Pembangunan',
                    'value' => function ($model) {
                        return $model->kategoriPembangunan->nama;
                    }
                ],
                [
                    'attribute' => 'Status Pembangunan',
                    'value' => function ($model) {
                        return $model->statusPembangunan->nama;
                    }
                ],
                [
                    'attribute' => 'User',
                    'value' => function ($model) {
                        return $model->user->username;
                    }
                ],
                [
                    'attribute' => 'mitra',
                    'value' => function ($model) {
                        return $model->mitra->nama_mitra;
                    }
                ],
                'created_at',
                'updated_at',
            ],
        ]) ?>
    
    </div>
</div>
