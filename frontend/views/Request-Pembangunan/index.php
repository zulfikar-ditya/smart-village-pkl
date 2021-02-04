<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Request Pembangunan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">

    <div class="request-pembangunan-index">
    
        <h3><?= Html::encode($this->title) ?></h3>
    
        <p>
            <?= Html::a('Create Request Pembangunan', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
        <div class="table-responsive table-hover text-capitalize">
            <table class="table">
                <thead  class="text-uppercase">
                    <th>id</th>
                    <th>judul</th>
                    <th>status</th>
                    <th>kategori pembangunan</th>
                </thead>
                <tbody>
                    <?php foreach ($data as $item) { ?>
                        <tr>
                            <th>
                                <?= Html::a($item['id'], ['request-pembangunan/view', 'id' => $item['id']]) ?>
                            </th>
                            <td><?= $item['judul'] ?></td>
                            <td><?= $item['status'] ?></td>
                            <td><?= $item['kategori_pembangunan_id'] ?></td>
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
