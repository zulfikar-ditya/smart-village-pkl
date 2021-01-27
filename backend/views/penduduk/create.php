<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Penduduk */

$this->title = 'Create Penduduk';
$this->params['breadcrumbs'][] = ['label' => 'Penduduks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penduduk-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'agama' => $agama,
        'pekerjaan' => $pekerjaan,
        'pendidikan' => $pendidikan,
        'RtRw' => $RtRw,
    ]) ?>

</div>
