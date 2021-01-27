<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\RtRw */

$this->title = 'Update Rt Rw: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Rt Rws', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rt-rw-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'dusun' => $dusun
        ]) ?>

</div>
