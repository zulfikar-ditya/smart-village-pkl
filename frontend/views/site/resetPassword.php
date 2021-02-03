<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ResetPasswordForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Reset password';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-reset-password">
    <div class="container">

        <div class="row justify-content-center alialign-items-center" style="height: 100vh">
            <div class="col-md-4 align-self-center shadow rounded-1 p-5">
                <div class="text-center my-5">
                    <h1><?= Html::encode($this->title) ?></h1>
                    <p>Please choose your new password:</p>
                </div>
                <?php $form = ActiveForm::begin(['id' => 'reset-password-form']); ?>

                    <?= $form->field($model, 'password')->passwordInput(['autofocus' => true]) ?>

                    <div class="row justify-content-center my-5">
                        <?= Html::submitButton('Save', ['class' => 'btn bg-cyan']) ?>
                    </div>
                <?php ActiveForm::end(); ?>

            </div>
        </div>

    </div>
</div>
