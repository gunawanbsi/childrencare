<!-- Begin Page Content -->
<div class="container-fluid">
    <?= $this->session->flashdata('pesan'); ?>
    <div class="row">
        <div class="col-lg-12">
            <?php if(validation_errors()){?>
                <div class="alert alert-danger" role="alert">
                <?= validation_errors();?>
                </div>
            <?php }?>
            <?= $this->session->flashdata('pesan'); ?>
            <a href="<?= base_url('laporan/Cetak_Konsul'); ?>" class="btn btn-primary mb-3"><i class="fas fa-print"></i> Print</a>
            <a href="<?= base_url('laporan/pdf_Konsul'); ?>" class="btn btn-warning mb-3"><i class="far fa-file-pdf"></i> Download Pdf</a>
            <a href="<?= base_url('laporan/excel_Konsul'); ?>" class="btn btn-success mb-3"><i class="far fa-file-excel"></i> Export ke Excel</a>
            <table class="table table-hover">
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
    </div>
<!-- /.container-fluid -->
</div>