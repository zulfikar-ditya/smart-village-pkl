<?php
use yii\helpers\Url;
use yii\helpers\Html;
/* @var $this yii\web\View */

// $this->title = 'My Yii Application';
?>
<style>
    .rounded {
        border-radius: 7px;
    }

    .mr-3 {
        margin-right: 10px;
    }

    .h-100 {
        height: 100%;
    }
</style>
<div class="site-index text-capitalize">
    <div class="row justify-content-center" id="row">
            <?php if (Yii::$app->user->identity->roles_id == 1) {?>
    
            <div class="col-md-3 mb-3 m-2 shadow">
                <div class="row">
                    
                    <div class="col-md-5 bg-pink align-self-center text-white rounded p-5">
                        <i class="fas fa-users fa-3x"></i>
                    </div>
                    
                    <div class="col-md-7" style="color: black;">
                        <a href="<?= Url::to(['/user'])?>">
                            <h2>User</h2>
                            <h5><?= $user ?></h5>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 mb-3 m-2 shadow">
                <div class="row">
                    <div class="col-md-5 bg-cyan align-self-center text-white rounded p-5">
                        <i class="fas fa-street-view fa-3x"></i>
                    </div>
                    
                    <div class="col-md-7" style="color: black;">
                        <a href="<?= Url::to(['/rt-rw'])?>">
                            <h2>Rt/Rw</h2>
                            <h5><?= $RtRw ?></h5>
                        </a>
                    </div>
                </div>
            </div>
    
            <div class="col-md-3 mb-3 m-2 shadow">
                <div class="row">
                    <div class="col-md-5 bg-green align-self-center text-white rounded p-5">
                        <i class="fas fa-map-marker-alt fa-3x"></i>
                    </div>
    
                    <div class="col-md-7" style="color: black;">
                        <a href="<?= Url::to(['/dusun'])?>">
                            <h2>Dusun</h2>
                            <h5><?= $dusun ?></h5>
                        </a>
                    </div>
                </div>
            </div>
    
            <?php } else { ?>
            <div class="col-md-3 align-self-center shadow bg-cyan p-0 m-3 rounded">
                <div class="card" style="display: flex; flex-direction: column;">
                    <div class="card-content text-center p-3">
                        <i class="fas fa-users fa-4x" style="color: white;"></i>
                        <h4 style="color: white;">Penduduk</h4>
                        <p class="text-white"><?= $penduduk ?></p>
                    </div>
                    <div class="card-footer text-center p-3" style="border-top: 1px solid var(--gray); background: #3dc1db;">
                        <a href="<?= Url::to(['/penduduk']) ?>">
                            <span style="color: white;">More Info <i class="fas fa-info-circle"></i></span>
                        </a>
                    </div>
                </div>
            </div>
    
            <div class="col-md-3 align-self-center shadow bg-green p-0 m-3 rounded">
                <div class="card" style="display: flex; flex-direction: column;">
                    <div class="card-content text-center p-3">
                        <i class="far fa-flag fa-4x"></i>
                        <h4>Lapor Aduan</h4>
                        <p><?= $laporAduan ?></p>
                    </div>
                    <div class="card-footer text-center p-3" style="border-top: 1px solid var(--gray); background: #198752;">
                        <a href="<?= Url::to(['/lapor-aduan']) ?>">
                            <span style="color: white;">More Info <i class="fas fa-info-circle"></i></span>
                        </a>
                    </div>
                </div>
            </div>
    
            <div class="col-md-3 align-self-center shadow bg-orange p-0 m-3 rounded">
                <div class="card" style="display: flex; flex-direction: column;">
                    <div class="card-content text-center p-3">
                        <i class="fas fa-search-plus fa-4x"></i>
                        <h4>Request Pembangunan</h4>
                        <p><?= $requestPembangunan ?></p>
                    </div>
                    <div class="card-footer text-center p-3" style="border-top: 1px solid var(--gray); background: #d15e00;">
                        <a href="<?= Url::to(['/request-pembangunan']) ?>">
                            <span style="color: white;">More Info <i class="fas fa-info-circle"></i></span>
                        </a>
                    </div>
                </div>
            </div>
    
            <div class="col-md-3 align-self-center shadow bg-red p-0 m-3 rounded">
                <div class="card" style="display: flex; flex-direction: column;">
                    <div class="card-content text-center p-3">
                        <i class="fas fa-tools fa-4x"></i>
                        <h4>Pembangunan</h4>
                        <p><?= $countPembangunan ?></p>
                    </div>
                    <div class="card-footer text-center p-3" style="border-top: 1px solid var(--gray); background: #be2736;">
                        <a href="<?= Url::to(['/pembangunan']) ?>">
                            <span style="color: white;">More Info <i class="fas fa-info-circle"></i></span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
<?php } ?>

        <div class="table-responsive table-stripped shadow text-capitalize mt-5 p-3">
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
            <?= Html::a('See more', ['pembangunan/index'], ['class' => 'btn btn-success']) ?>
        </div>

        <div class="table-responsive table-stripped shadow text-capitalize mt-5 p-3">
            <h3 class="text-center">Request Pembangunan Terbaru</h3>
            <table class="table">
                <thead>
                    <th>id</th>
                    <th>Judul</th>
                    <th>deskripsi</th>
                    <th>status</th>
                </thead>
                <tbody>
                    <?php foreach ($dataRequestPembangunan as $item) { ?>
                        <tr>
                            <th><?= $item['id'] ?></th>
                            <td><?= $item['judul'] ?></td>
                            <td><?= $item['deskripsi'] ?></td>
                            <?php if ($item['status']) {?>
                            <td>Selesai</td>
                            <?php } else {?>
                            <td>Dalam Pengerjaan</td>
                            <?php }?>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <?= Html::a('See more', ['request-pembangunan/index'], ['class' => 'btn btn-success']) ?>
        </div>

        <div class="table-responsive table-stripped shadow text-capitalize mt-5 p-3">
            <h3 class="text-center">Lapor Aduan Terbaru</h3>
            <table class="table">
                <thead>
                    <th>id</th> 
                    <th>deskirpsi</th>
                    <th>pembangunan id</th>
                    <th>status</th>
                </thead>
                <tbody>
                    <?php foreach ($dataLaporAduan as $item) { ?>
                        <tr>
                            <th><?= $item['id'] ?></th>
                            <td><?= $item['deskripsi'] ?></td>
                            <td><?= $item['pembangunan_id'] ?></td>
                            <?php if ($item['status']) {?>
                            <td>Selesai</td>
                            <?php } else {?>
                            <td>Dalam Pengerjaan</td>
                            <?php }?>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <?= Html::a('See more', ['lapor-aduan/index'], ['class' => 'btn btn-success']) ?>
        </div>

    </div>
