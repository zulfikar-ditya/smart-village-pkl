<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Pembangunan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pembangunan-form">

    <?php $form = ActiveForm::begin([
        'options' => [
            'enctype' => 'multipart/form-data'
        ]
    ]); ?>

    <!-- <?= $form->field($model, 'id')->textInput() ?> -->

    <?= $form->field($model, 'nama_pembangunan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'foto')->textInput(['type' => 'file']) ?>

    <?= $form->field($model, 'anggaran')->textInput(['type' => 'number']) ?>

    <?= $form->field($model, 'tgl_mulai')->textInput(['type' => 'date']) ?>

    <?= $form->field($model, 'tgl_selesai')->textInput(['type' => 'date']) ?>

    <?= $form->field($model, 'longitude')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'latitude')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'prosentase')->textInput() ?>

    <div class="form-group">
        <label for="">Sumber Dana Id</label>
        <select name="Pembangunan[sumber_dana_pembangunan_id]" id="" class="form-control" aria-required="true" aria-invalid="true">
            <?php foreach ($sumberDana as $item) { ?>
                <option value="<?= $item-> id ?>"><?= $item->nama ?></option>
            <?php } ?>

        </select>
    </div>

    <div class="form-group">
        <label for="">Kategori Pembangunan Id</label>
        <select name="Pembangunan[kategori_pembangunan_id]" id="" class="form-control" aria-required="true" aria-invalid="true">
            <?php foreach ($kategoriPembangunan as $item) { ?>
                <option value="<?= $item-> id ?>"><?= $item->nama ?></option>
            <?php } ?>

        </select>
    </div>

    <div class="form-group">
        <label for="">Status Pembangunan Id</label>
        <select name="Pembangunan[status_pembangunan_id]" id="" class="form-control" aria-required="true" aria-invalid="true">
            <?php foreach ($statusPembangunan as $item) { ?>
                <option value="<?= $item-> id ?>"><?= $item->nama ?></option>
            <?php } ?>
        </select>
    </div>

    <div class="form-group">
        <label for="">Mitra Id</label>
        <select name="Pembangunan[mitra_id]" id="" class="form-control" aria-required="true" aria-invalid="true">
            <?php foreach ($mitra as $item) { ?>
                <option value="<?= $item-> id ?>"><?= $item->nama_mitra ?></option>
            <?php } ?>
        </select>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
