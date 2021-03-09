<?php 

use yii\helpers\Html;

$this->title = 'Dashboard';

?>

<div class="container" id="dashboard">
    <div class="row justify-content-center">

        <div class="col-md-4 rounded mt-3">
            <div class="card bg-true-gray p-5">
                <h3><i class="fas fa-signature" style="font-size: 20px;"></i> <?= Yii::$app->user->identity->name ?></h3>
                <h4><i class="fas fa-at"></i> <?= Yii::$app->user->identity->email ?></h4>
                <h4><i class="fas fa-user"></i> <?= Yii::$app->user->identity->username ?></h4>
            </div>
            <div class="card p-5 bg-white shadow">
                <?php if ($penduduk == null) { ?>
                    <p>Anda tidak termasuk penduduk</p>
                <?php } else { ?>
                    <table class="text-capitalize">
                        <thead>
                            <th style="width: 50%"></th>
                            <th style="width: 50%"></th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Nama Lengkap</td>
                                <td>:  <?= $penduduk->nama_lengkap ?></td>
                            </tr>
                            <tr>
                                <td>TTL</td>
                                <td>:  <?= $penduduk->tempat_lahir.', '.$penduduk->tanggal_lahir ?></td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <?php if($penduduk->jenis_kelamin == 'L') { ?>
                                <td>:  Laki-Laki</td>
                                <?php } else { ?>
                                <td>:  Perempuan</td>
                                <?php } ?>
                            </tr>
                            <tr>
                                <td>Agama</td>
                                <td>:  <?= $penduduk->getAgama()->all()[0]['nama']; ?></td>
                            </tr>
                            <tr>
                                <td>Status perkawinan</td>
                                <td>:  <?= $penduduk->status_perkawinan ?></td>
                            </tr>
                            <tr>
                                <td>Pekerjaan</td>
                                <td>:  <?= $penduduk->getPekerjaan()->all()[0]['nama']; ?></td>
                            </tr>
                            <tr>
                                <td>Pendidikan</td>
                                <td>:  <?= $penduduk->getPendidikan()->all()[0]['nama']; ?></td>
                            </tr>
                            <tr>
                                <td>RtRw</td>
                                <td>:  <?= $penduduk->getRtRw()->all()[0]['rw_parent'].'/'.$penduduk->getRtRw()->all()[0]['rt_child']; ?></td>
                            </tr>
                            <?php if($mitra != null) { ?>
                                <tr>
                                    <td>nama mitra</td>
                                    <td>:  <?= $mitra[0]['nama_mitra'] ?></td>
                                </tr>
                                <tr>
                                    <td>alamat</td>
                                    <td>:  <?= $mitra[0]['alamat'] ?></td>
                                </tr>
                                <tr>
                                    <td>no telp</td>
                                    <td>:  <?= $mitra[0]['no_telp'] ?></td>
                                </tr>
                                <tr>
                                    <td>email</td>
                                    <td>:  <?= $mitra[0]['email'] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                <?php }?>
            </div>
        </div>

        <div class="col-md-8">
            <div class="row justify-content-center">

                <div class="col-md-5 bg-rose m-3 shadow rounded-1 p-5 text-white text-center">
                    <div class="card">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M4 24h-2v-24h2v24zm18-21.387s-1.621 1.43-3.754 1.43c-3.36 0-3.436-2.895-7.337-2.895-2.108 0-4.075.98-4.909 1.694v12.085c1.184-.819 2.979-1.681 4.923-1.681 3.684 0 4.201 2.754 7.484 2.754 2.122 0 3.593-1.359 3.593-1.359v-12.028z"/></svg>
                        <a href="<?= \yii\helpers\Url::to('index.php?r=lapor-aduan') ?>" class="text-white">
                            <div class="">
                                <hr style="border-color: white;">
                                <h4>Lapor Aduan <i class="fas fa-info-circle"></i></h4>
                            </div>
                        </a>
                    </div>
                </div>
                
                <div class="col-md-5 bg-lime m-3 shadow rounded-1 p-5 text-white text-center">
                    <div class="card">
                        <svg xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 24 24"><path d="M16.063 19.528l-6.416-5.37 1.08 1.961c.134.241.214.515.232.791l.38 5.793c.041.674-.466 1.297-1.253 1.297-.59 0-1.093-.4-1.225-.974l-1.157-4.961c-.385-.437-1.475-1.593-2.135-2.291-.719 1.711-2.536 6.043-3.114 7.459-.192.473-.645.767-1.179.767-.703 0-1.276-.569-1.276-1.27 0-.092 0-.112.761-3.863.518-2.555 1.167-5.755 1.473-7.382.084-.445.287-.86.587-1.198l.938-1.057-3.37-2.82c-.507-.425.137-1.192.642-.767l.949.795c.325-.626.855-1.651 1.165-2.278.199-.397.589-.658 1.045-.699 1.178.012 2.314.018 5.252.039.57.005 1.121.049 1.596.528.294.294 2.051 2.176 2.416 2.542.333.334.522.794.521 1.263l-.005 8.639 2.766 2.316 2.72-2.996c.235-.259.546-.381.854-.381.465 0 .919.277 1.088.779.937 2.817 2.602 7.81 2.602 7.81h-12l4.063-4.472zm-11.537-9.656l-.957 1.079c-.179.202-.302.451-.352.72-.306 1.63-.956 4.835-1.476 7.394-.371 1.829-.721 3.556-.744 3.72.01.211.431.32.533.071.726-1.782 3.414-8.175 3.414-8.175.186-.439.621-.362.823-.151 0 0 2.101 2.208 2.629 2.776.139.15.235.334.282.531l1.157 4.963c.064.287.524.261.506-.033l-.38-5.79c-.008-.131-.047-.261-.109-.375l-1.943-3.527c-.07-.125-.081-.271-.037-.402l-3.346-2.801zm18.087 13.128c-.559-1.676-1.793-5.397-2.164-6.494-.036-.106-.171-.129-.253-.042-1.031 1.082-4.259 4.691-5.936 6.536h8.353zm-9.642-7.364l.004-7.805c.001-.206-.083-.408-.229-.555-.709-.711-1.804-1.928-2.417-2.543-.177-.179-.37-.229-.895-.233-2.865-.021-4.154-.027-5.206-.041-.063.008-.143.058-.187.146-.338.684-.938 1.842-1.252 2.444l.07.049 1.694-1.887c.103-.114.259-.169.405-.165l2.617.175c.414.028.616.521.34.831l-2.725 3.072 3.308 2.768 2.434-2.826c.273-.316.796-.177.871.239l1.165 6.329.003.002zm-3.706-3.102l.94.787 1.527 1.278-.729-4.083-1.738 2.018zm-5.677-4.751l.835.699 2.068-2.331-1.356-.091-1.547 1.723zm10.845-2.096c-1.568 0-2.845-1.275-2.845-2.843s1.277-2.844 2.845-2.844c1.568 0 2.844 1.276 2.844 2.844 0 1.568-1.276 2.843-2.844 2.843zm0-4.687c-1.018 0-1.845.827-1.845 1.844 0 1.016.827 1.843 1.845 1.843 1.017 0 1.844-.827 1.844-1.843 0-1.017-.827-1.844-1.844-1.844z"/></svg>
                        <a href="<?= \yii\helpers\Url::to('index.php?r=pembangunan') ?>" class="text-white">
                            <div class="">
                                <hr style="border-color: white;">
                                <h4>Pembangunan <i class="fas fa-info-circle"></i></h4>
                            </div>
                        </a>
                    </div>
                </div>
                
                <div class="col-md-5 bg-indigo m-3 shadow rounded-1 p-5 text-white text-center">
                    <div class="card">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M13 10h-3v3h-2v-3h-3v-2h3v-3h2v3h3v2zm8.172 14l-7.387-7.387c-1.388.874-3.024 1.387-4.785 1.387-4.971 0-9-4.029-9-9s4.029-9 9-9 9 4.029 9 9c0 1.761-.514 3.398-1.387 4.785l7.387 7.387-2.828 2.828zm-12.172-8c3.859 0 7-3.14 7-7s-3.141-7-7-7-7 3.14-7 7 3.141 7 7 7z"/></svg>
                        <a href="<?= \yii\helpers\Url::to('index.php?r=request-pembangunan') ?>" class="text-white">
                            <div class="">
                                <hr style="border-color: white;">
                                <h4>Request Pembangunan <i class="fas fa-info-circle"></i></h4>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
        <h3 class="text-center my-5">Pengumuman</h3>
        <table class="table p-5 shadow" style="padding: 3rem;">
            <thead class="text-uppercase">
                <th>No</th>
                <th>Isi</th>
                <th>perihal</th>
                <th>tanggal pengumuman</th>
            </thead>
            <tbody class="text-capitalize">
                <?php if (count($pengumuman) == 0) { ?>
                    <tr>
                        <td><h1>None</h1></td>
                    </tr>
                <?php } ?>
                <?php $i = 1; ?>
                <?php foreach ($pengumuman as $item) { ?>
                    <tr>
                        <th><?= $i ?></th>
                        <td><?= $item['isi'] ?></td>
                        <td><?= $item['perihal'] ?></td>
                        <td><?= $item['tgl_pengumuman'] ?></td>
                    </tr>
                    <?php $i++; ?>
                <?php }?>
            </tbody>
        </table>
    </div>
</div>