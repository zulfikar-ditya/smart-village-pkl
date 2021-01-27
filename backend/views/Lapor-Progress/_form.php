<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\LaporProgress */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lapor-progress-form">

    <?php $form = ActiveForm::begin(
        [
            'options' => [
                'enctype' => 'multipart/form-data',
            ]
        ]
    ); ?>

    <!-- <?= $form->field($model, 'id')->textInput() ?> -->

    <?= $form->field($model, 'image')->fileInput() ?>

    <?= $form->field($model, 'tanggal')->textInput(['type' => 'date']) ?>

    <?= $form->field($model, 'capaian_progress')->textInput(['type' => 'number']) ?>

    <?= $form->field($model, 'uraian_pekerjaan')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'pembangunan_id')->textInput(['type' => 'number']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
