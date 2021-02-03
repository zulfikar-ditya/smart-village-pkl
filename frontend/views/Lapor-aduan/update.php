<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\LaporAduan */

$this->title = 'Update Lapor Aduan: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Lapor Aduans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="container">
    <div class="lapor-aduan-update">
    
        <h3 class="text-center my-5"><?= Html::encode($this->title) ?></h3>
    
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    
    </div>
</div>
