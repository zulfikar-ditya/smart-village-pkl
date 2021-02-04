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
                'sumber_dana_pembangunan_id',
                'kategori_pembangunan_id',
                'status_pembangunan_id',
                'user_id',
                'mitra_id',
                'created_at',
                'updated_at',
            ],
        ]) ?>
    
    </div>
</div>
