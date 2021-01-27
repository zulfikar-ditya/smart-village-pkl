<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\RtRw */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rt-rw-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'rw_parent')->textInput(['maxlength' => true, 'type' => 'number']) ?>

    <?= $form->field($model, 'rt_child')->textInput(['type' => 'number']) ?>

    <div class="form-group">
        <label for="">Dusun Id</label>
        <select name="RtRw[dusun_id]" id="" class="form-control">
            <?php foreach ($dusun as $item) { ?>
                <option value="<?= $item['id'] ?>"><?= $item['nama_dusun'] ?></option>
            <?php } ?>
        </select>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
