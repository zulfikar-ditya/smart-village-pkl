<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>

<div class="container">
    <div class="row justify-content-center align-items-center" style="height: 100vh;">
        <div class="col-md-8">
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
