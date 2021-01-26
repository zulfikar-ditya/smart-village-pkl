<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Query\LaporProgressSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lapor-progress-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'image') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'capaian_progress') ?>

    <?= $form->field($model, 'uraian_pekerjaan') ?>

    <?php // echo $form->field($model, 'pembangunan_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
