<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\RequestPembangunan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="request-pembangunan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'judul')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deskripsi')->textarea(['rows' => 6]) ?>
    <div class="form-group">
        <label for="">Kategory Pembangunan Id</label>
        <select name="RequestPembangunan[kategori_pembangunan_id]" id="" class="form-control">
            <?php foreach ($kategoryPembangunan as $item) {?>
                <option value="<?= $item['id'] ?>"><?= $item['nama']?> </option>
            <?php }?>
        </select>
    </div>

    <?= $form->field($model, 'status')->dropDownList([ 'terverifikasi' => 'Terverifikasi', 'ditindaklanjuti' => 'Ditindaklanjuti', 'requestbaru' => 'Requestbaru', '' => '', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
