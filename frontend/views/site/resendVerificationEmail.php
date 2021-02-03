<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ResetPasswordForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Resend verification email';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div class="site-resend-verification-email">
        <div class="row justify-content-center align-items-center text-capitalize" style="height: 80vh;">
            <div class="col-md-4 align-self-center p-5 shadow rounded-1">
                <div class="text-center my-5">
                    <h1><?= Html::encode($this->title) ?></h1>
                    <p>Please fill out your email. A verification email will be sent there.</p>
                </div>
                <?php $form = ActiveForm::begin(['id' => 'resend-verification-email-form']); ?>
    
                <?= $form->field($model, 'email')->textInput(['autofocus' => true]) ?>
    
                <div class="row justify-content-center my-5">
                    <?= Html::submitButton('Send', ['class' => 'btn bg-cyan']) ?>
                </div>
    
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
