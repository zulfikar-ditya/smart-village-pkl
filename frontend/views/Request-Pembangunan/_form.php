<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\RequestPembangunan */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="row justify-content-center align-items-center mb-5">
    <div class="col-md-4 align-self-center p-5 shadow rounded-1">
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
        
            <!-- <?= $form->field($model, 'status')->dropDownList([ 'terverifikasi' => 'Terverifikasi', 'ditindaklanjuti' => 'Ditindaklanjuti', 'requestbaru' => 'Requestbaru', '' => '', ], ['prompt' => '']) ?> -->
        
            <div class="row justify-content-center">
                <?= Html::submitButton('Save', ['class' => 'btn bg-cyan']) ?>
            </div>
        
            <?php ActiveForm::end(); ?>
        
        </div>
    </div>
</div>
