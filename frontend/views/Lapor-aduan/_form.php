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
        
            <?= $form->field($model, 'pembangunan_id')->textInput() ?>
        
            <?= $form->field($model, 'status')->dropDownList([ 'diverifikasi' => 'Diverifikasi', 'ditolak' => 'Ditolak', 'dipending' => 'Dipending', 'laporanbaru' => 'Laporanbaru', ], ['prompt' => '']) ?>
        
            <div class="row justify-content-center">
                <?= Html::submitButton('Save', ['class' => 'btn bg-cyan']) ?>
            </div>
        
            <?php ActiveForm::end(); ?>
        </div>
    </div>

</div>
