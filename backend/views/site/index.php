<?php
use yii\helpers\Url;
/* @var $this yii\web\View */

// $this->title = 'My Yii Application';
?>
<style>
    .rounded {
        border-radius: 7px 0px 0px 7px;
    }

    .mr-3 {
        margin-right: 10px;
    }

    .h-100 {
        height: 100%;
    }
</style>
<div class="site-index text-capitalize">
    <div class="row justify-content-center">

        <div class="col-md-3 mb-3 m-2 shadow">
            <div class="row">
                
                <div class="col-md-4 bg-pink align-self-center text-white rounded p-5">
                    <i class="fas fa-users fa-3x"></i>
                </div>
                
                <a href="<?= Url::to(['/user'])?>">
                    <div class="col-md-8" style="color: black;">
                        <h2>User</h2>
                        <h5><?= $user ?></h5>
                    </div>
                </a>
            </div>
        </div>
        
        <div class="col-md-3 mb-3 m-2 shadow">
            <div class="row">
                <div class="col-md-4 bg-cyan align-self-center text-white rounded p-5">
                    <i class="fas fa-street-view fa-3x"></i>
                </div>
                
                <a href="<?= Url::to(['/rt-rw'])?>">
                    <div class="col-md-8" style="color: black;">
                        <h2>Rt/Rw</h2>
                        <h5><?= $RtRw ?></h5>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-md-3 mb-3 m-2 shadow">
            <div class="row">
                <div class="col-md-4 bg-green align-self-center text-white rounded p-5">
                    <i class="fas fa-map-marker-alt fa-3x"></i>
                </div>

                <a href="<?= Url::to(['/dusun'])?>">
                    <div class="col-md-8" style="color: black;">
                        <h2>Dusun</h2>
                        <h5><?= $dusun ?></h5>
                    </div>
                </a>
            </div>
        </div>

    </div>
    <div class="table-responsive table-stripped shadow text-capitalize mt-5">
        <h3 class="text-center">Pembangunan Terbaru</h3>
        <table class="table">
            <thead>
                <th>id</th>
                <th>nama</th>
                <th>dimulai</th>
                <th>status</th>
            </thead>
            <tbody>
                <?php foreach ($dataPembangunan as $item) { ?>
                    <tr>
                        <th><?= $item['id'] ?></th>
                        <td><?= $item['nama_pembangunan'] ?></td>
                        <td><?= $item['tgl_mulai'] ?></td>
                        <?php if ($item['status_pembangunan_id']) {?>
                        <td>Selesai</td>
                        <?php } else {?>
                        <td>Dalam Pengerjaan</td>
                        <?php }?>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
