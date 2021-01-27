<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Dusun */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dusun-form">

    <?php $form = ActiveForm::begin(); ?>

    <!-- <?= $form->field($model, 'id')->textInput() ?> -->

    <?= $form->field($model, 'nama_dusun')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
