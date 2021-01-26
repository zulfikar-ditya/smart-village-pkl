<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\LaporProgress */

$this->title = 'Create Lapor Progress';
$this->params['breadcrumbs'][] = ['label' => 'Lapor Progresses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lapor-progress-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
