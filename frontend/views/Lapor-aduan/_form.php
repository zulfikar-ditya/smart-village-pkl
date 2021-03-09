<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\LaporAduan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lapor-aduan-form">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-5 p-5 shadow rounded-1 mb-5">
            <?php $form = ActiveForm::begin([
                'options' => [
                    'enctype' => 'multipart/form-data',
                ]
            ]); ?>
        
            <?= $form->field($model, 'foto')->textInput(['type' => 'file']) ?>
        
            <?= $form->field($model, 'deskripsi')->textarea(['rows' => 6]) ?>

            <div class="form-group">
                <label for="">Pembangunan</label>
                <select name="LaporAduan[pembangunan_id]" id="" class="form-control" required>
                    <?php foreach ($dataPembangunan as $item) { ?>
                        <option value="<?= $item['id'] ?>"><?= $item['nama_pembangunan'] ?></option>
                    <?php } ?>
                </select>
            </div>    
        
            <div class="row justify-content-center">
                <?= Html::submitButton('Save', ['class' => 'btn bg-cyan']) ?>
            </div>
        
            <?php ActiveForm::end(); ?>
        </div>
    </div>

</div>
