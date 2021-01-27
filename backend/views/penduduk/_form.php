<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Penduduk */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="penduduk-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nik')->textInput(['maxlength' => true, 'type' => 'number']) ?>

    <?= $form->field($model, 'nama_lengkap')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tempat_lahir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_lahir')->textInput(['type' => 'date']) ?>

    <?= $form->field($model, 'jenis_kelamin')->dropDownList([ 'L' => 'L', 'P' => 'P', ], ['prompt' => '']) ?>

    <div class="form-group">
        <label for="">Agama Id</label>
        <select name="Penduduk[agama_id]" id="" class="form-control">
            <?php foreach ($agama as $item) { ?>
                <option value="<?= $item['id'] ?>"><?= $item['nama']?></option>
            <?php } ?>
        </select>
    </div>

    <?= $form->field($model, 'status_perkawinan')->dropDownList([ 'Belum Menikah' => 'Belum Menikah', 'Sudah Menikah' => 'Sudah Menikah', ], ['prompt' => '']) ?>

    <div class="form-group">
        <label for="">Pekerjaan Id</label>
        <select name="Penduduk[pekerjaan_id]" class="form-control">
            <?php foreach ($pekerjaan as $item) { ?>
                <option value="<?= $item['id'] ?>"><?= $item['nama']?></option>
            <?php } ?>
        </select>
    </div>

    <div class="form-group">
        <label for="">Pendidikan Id</label>
        <select name="Penduduk[pendidikan_id]" class="form-control">
            <?php foreach ($pendidikan as $item) { ?>
                <option value="<?= $item['id'] ?>"><?= $item['nama']?></option>
            <?php } ?>
        </select>
    </div>

    <div class="form-group">
        <label for="">Rt Rw Id</label>
        <select name="Penduduk[rt_rw_id]" class="form-control">
            <?php foreach ($RtRw as $item) { ?>
                <option value="<?= $item['id'] ?>"><?= $item['id']?></option>
            <?php } ?>
        </select>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
