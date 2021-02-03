<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <div class="container">
        <div class="row justify-content-center align-items-center" style="height: 100vh;">
            <div class="col-md-4 align-self-center shadow rounded-1" style="padding: 1.5rem;">
                <h1 class="text-center" style="letter-spacing: 10px;"><?= Html::encode($this->title) ?></h1>
                <?php $form = ActiveForm::begin(
                    [
                        'id' => 'form-signup',
                        'options' => [
                            'style' => 'margin-top: 3rem'
                        ]
                    ]
                ); ?>
    
                    <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
    
                    <?= $form->field($model, 'email') ?>
    
                    <?= $form->field($model, 'password')->passwordInput() ?>
    
                    <div class="row justify-content-center">
                        <?= Html::submitButton('Signup', ['class' => 'btn btn-success', 'name' => 'signup-button']) ?>
                    </div>
    
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
