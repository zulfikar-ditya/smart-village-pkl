<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\Query\LaporAduanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lapor Aduan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">

    <div class="lapor-aduan-index">
    
        <h3><?= Html::encode($this->title) ?></h3>
    
        <p>
            <?= Html::a('Create Lapor Aduan', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
    
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <div class="table-responsice table-hover">
            <table class="table text-capitalize">
                <thead>
                    <th>id</th>
                    <th>deskripsi</th>
                    <th>pembangunan id</th>
                    <th>status</th>
                </thead>
                <tbody>
                    <?php foreach ($data as $item) { ?>
                        <tr>
                            <th>
                                <a href="<?= \yii\helpers\Url::to('?r=lapor-aduan%2Fview&id='.$item['id'])?>">
                                    <?= $item['id'] ?>
                                </a>
                            </th>
                            <td><?= $item['deskripsi'] ?></td>
                            <td><?= $item['pembangunan_id'] ?></td>
                            <td><?= $item['status'] ?></td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    
    
    </div>
</div>
