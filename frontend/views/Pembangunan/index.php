<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pembangunan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">

    <div class="pembangunan-index">
    
        <h3><?= Html::encode($this->title) ?></h3>
        <div class="table table-hover text-capitalize">
            <table class="table">
                <thead class="text-uppercase">
                    <th>id</th>
                    <th>nama pembangunan</th>
                    <th>anggaran</th>
                </thead>
                <tbody>
                    <?php foreach ($data as $item) { ?>
                        <tr>
                            <th>
                                <a href="<?= \yii\helpers\Url::to('index.php?r=pembangunan%2Fview&id='.$item['id']) ?>">
                                    <?= $item['id'] ?>
                                </a>
                            </th>
                            <td><?= $item['nama_pembangunan'] ?></td>
                            <td><?= $item['anggaran'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <span>
            <?= \yii\widgets\LinkPager::widget([
                'pagination' => $pages
            ]); ?>
        </span>
    </div>
</div>
