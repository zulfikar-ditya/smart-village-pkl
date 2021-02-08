<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
?>
<div class="site-login" style="width: 100%;">
    <div class="container">
        <div class="row justify-content-center align-items-center" style="height: 90vh;">
            <div class="col-md-5 align-self-center shadow p-5 " style="background: rgba(255, 255, 255, .9);">
                
                <h1 class="text-center" style="letter-spacing: 10px;"><?= Html::encode($this->title) ?></h1>
                <hr style="border: 1px solid var(--cyan);">
                <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
            
                    <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
            
                    <?= $form->field($model, 'password')->passwordInput() ?>
            
                    <?= $form->field($model, 'rememberMe')->checkbox() ?>
                    <hr style="border: 1px solid var(--cyan);">
            
                    <div class="row justify-content-center">
                        <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                    </div>
            
                <?php ActiveForm::end(); ?>

            </div>
        </div>
    </div>
</div>