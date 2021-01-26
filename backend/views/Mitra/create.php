<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Mitra */

$this->title = 'Create Mitra';
$this->params['breadcrumbs'][] = ['label' => 'Mitras', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mitra-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
