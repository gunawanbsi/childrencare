<!-- Begin Page Content -->
<div class="container-fluid">
 <!-- row ux-->
 <div class="row">
    <div class="col-xl-5 col-md-6 mb-4">
        <div class="card border-left-danger shadow h-100 py-2 bg-primary">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-md font-weight-bold text-white text-uppercase mb-1">Jumlah User</div>
                        <div class="h1 mb-0 font-weight-bold text-white"><?=$this->ModelUser->getUserWhere(['role_id' => 2])->num_rows(); ?></div>
                        </div>
                        <div class="col-auto">
                            <a href="<?= base_url('admin/user'); ?>"><i class="fas fa-users fa-3x text-danger"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-5 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2 bg-warning">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-md font-weight-bold text-white text-uppercase mb-1">Jumlah Petugas</div>
                            <div class="h1 mb-0 font-weight-bold text-white">
                                <?=$this->ModelPetugas->cekData()->num_rows(); ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <a href="<?= base_url('admin/petugas'); ?>"><i class="fas fa-book-medical fa-3x text-primary"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
        <!-- end row ux-->
        <!-- row table-->
            <div class="table-responsive table-bordered ml-auto mr-auto mt-2">
                <div class="page-header">
                    <span class="fas fa-users text-primary mt-2 "> Data Konsultasi Pasien</span>
                    <a class="text-danger" href="<?php echo base_url('admin/konsul'); ?>"><i class="fas fa-search mt-2 float-right">Tampilkan</i></a>
                </div>
                <table class="table mt-3">
                    <thead>
                        <tr>
                            <th>Nomor</th>
                            <th>Nama Pasien</th>
                            <th>Alamat Pasien</th>
                            <th>Jenis Kelamin</th>
                            <th>Tanggal Lahir</th>
                            <th>Kategori Anak</th>
                            <th>Berat Badan</th>
                            <th>Tinggi Badan</th>
                            <th>Tanggal Konsultasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($konsul as $a) { ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $a['nama_pasien']; ?></td>
                            <td><?= $a['alamat_pasien']; ?></td>
                            <td><?= $a['jenis_kelamin']; ?></td>
                            <td><?= $a['tgl_lahir']; ?></td>
                            <td><?= $a['kategori_anak']; ?></td>
                            <td><?= $a['berat_badan']; ?></td>
                            <td><?= $a['tinggi_badan']; ?></td>
                            <td><?= $a['tgl_konsultasi'] ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            
    </div>
<!-- end of row table-->
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
                        </div>