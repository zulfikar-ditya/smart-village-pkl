<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\RequestPembangunan */

$this->title = 'Create Request Pembangunan';
$this->params['breadcrumbs'][] = ['label' => 'Request Pembangunans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div class="request-pembangunan-create">
    
        <h3 class="text-center mb-5"><?= Html::encode($this->title) ?></h3>
    
        <?= $this->render('_form', [
            'model' => $model,
            'kategoryPembangunan' => $kategoryPembangunan
        ]) ?>
    
    </div>
</div>
