<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\RequestPembangunan */

$this->title = 'Update Request Pembangunan: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Request Pembangunans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="container">
    <div class="request-pembangunan-update">
    
        <h3 class="text-center mb-5"><?= Html::encode($this->title) ?></h3>
    
        <?= $this->render('_form', [
            'model' => $model,
            'kategoryPembangunan' => $kategoryPembangunan
        ]) ?>
    
    </div>
</div>
