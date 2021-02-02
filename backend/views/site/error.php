<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="container text-center" id="error">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-8 align-self-center">
            <div class="site-error">
                <div class="glass"></div>
                <h1><?= Html::encode($this->title) ?></h1>
            
                <div class="alert alert-danger">
                    <?= nl2br(Html::encode($message)) ?>
                </div>
                <a href="<?= \yii\helpers\Url::home(); ?>">Home Page</a>
            </div>
        </div>
    </div>
</div>
