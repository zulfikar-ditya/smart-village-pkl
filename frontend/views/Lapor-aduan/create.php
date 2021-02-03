<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\LaporAduan */

$this->title = 'Create Lapor Aduan';
$this->params['breadcrumbs'][] = ['label' => 'Lapor Aduans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div class="lapor-aduan-create">
    
        <h3 class="text-center my-5"><?= Html::encode($this->title) ?></h3>
    
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    
    </div>
</div>
