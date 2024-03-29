<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?> Smart VIllage</title>
    <?php $this->head() ?>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Oxygen', sans-serif;
        }
    </style>
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css">
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap" style="padding: 0;">
    <header>
        <?php
        NavBar::begin([
            'brandLabel' => Yii::$app->name,
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'navbar-inverse navbar-fixed-top text-white shadow',
            ],
        ]);
        if (!Yii::$app->user->isGuest) {
            $menuItems[] = [
                'label' => 'Dashboard', 'url' => ['/site/dashboard'],    
            ];
        }
        if (Yii::$app->user->isGuest) {
            $menuItems[] = [
                'label' => 'SignUp', 'url' => ['/site/signup'],
            ];
            $menuItems[] = [
                'label' => 'SignIn', 'url' => ['/site/login'],
            ];
        } else {
            $menuItems[] = '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout',
                    // ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>';
        }
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right'],
            'items' => $menuItems,
        ]);
        NavBar::end();
        ?>
    </header>
    <?= Alert::widget() ?>
    <?= $content ?>
</div>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();

    window.addEventListener('scroll-nav', function () {
        var header = document.querySelector('nav');
        header.classList.toggle('scrool-active', window.scrollY > 0);
    });

</script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
