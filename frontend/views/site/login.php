<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <div class="container">
        <div class="row justify-content-center align-items-center" style="height: 100vh;">
            <div class="col-md-4 align-self-center shadow" style="padding: 1.5rem;">
                <h1 class="text-center" style="letter-spacing: 10px;"><?= Html::encode($this->title) ?></h1>
    
                <?php $form = ActiveForm::begin(
                    [
                        'id' => 'login-form',
                        'options' => [
                            'style' => 'margin-top: 3rem',
                        ]
                    ]
                ); ?>
                    <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                    <?= $form->field($model, 'password')->passwordInput() ?>

                    <?= $form->field($model, 'rememberMe')->checkbox() ?>

                    <div class="row justify-content-center">
                        <div class="form-group">
                            <?= Html::submitButton('Login', ['class' => 'btn bg-cyan', 'name' => 'login-button', 'style' => 'color: white']) ?>
                        </div>
                    </div>        

                <?php ActiveForm::end(); ?>

                <div class="row flex-column text-center" style="margin-bottom: 10px;">
                    Forgot Your Password? <?= Html::a('Reset It', ['site/request-password-reset']) ?>.
                    Need new verification email? <?= Html::a('Resend', ['site/resend-verification-email']) ?>
                </div>
            </div>
        </div>
    </div>
</div>
