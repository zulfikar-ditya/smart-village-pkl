<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\PasswordResetRequestForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Request password reset';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div class="site-request-password-reset">
        <div class="row justify-content-center align-items-center flex-column text-capitalize" style="height: 80vh;">
            <div class="col-md-4 align-self-center p-5 shadow rounded-1">
                <div class="text-center my-5">
                    <h1><?= Html::encode($this->title) ?></h1>
                
                    <p>Please fill out your email. A link to reset password will be sent there.</p>
                </div>
                <?php $form = ActiveForm::begin(['id' => 'request-password-reset-form']); ?>
    
                    <?= $form->field($model, 'email')->textInput(['autofocus' => true]) ?>
    
                    <div class="row justify-content-center my-5">
                        <?= Html::submitButton('Send', ['class' => 'btn bg-cyan']) ?>
                    </div>
    
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
