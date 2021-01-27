<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\RtRw */

$this->title = 'Create Rt Rw';
$this->params['breadcrumbs'][] = ['label' => 'Rt Rws', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rt-rw-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'dusun' => $dusun
        ]) ?>

</div>
