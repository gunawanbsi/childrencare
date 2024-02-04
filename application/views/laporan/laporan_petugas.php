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
            <a href="<?= base_url('laporan/Cetak_Petugas'); ?>" class="btn btn-primary mb-3"><i class="fas fa-print"></i> Print</a>
            <a href="<?= base_url('laporan/pdf_Petugas'); ?>" class="btn btn-warning mb-3"><i class="far fa-file-pdf"></i> Download Pdf</a>
            <a href="<?= base_url('laporan/excel_Petugas'); ?>" class="btn btn-success mb-3"><i class="far fa-file-excel"></i> Export ke Excel</a>
            <table class="table table-hover">
            <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NAMA PETUGAS</th>
                        <th scope="col">EMAIL PETUGAS</th>
                        <th scope="col">JABATAN</th>
                        <th scope="col">ALAMAT</th>
                        <th scope="col">NOMOR TELEPON</th>
                    </tr>
                </thead>
                <tbody>
                <?php $a = 1; 
                foreach ($petugas as $k) { ?>
                <tr>
                    <th scope="row"><?= $a++; ?></th>
                    <td><?= $k['nama_petugas']; ?></td>
                    <td><?= $k['email_petugas']; ?></td>
                    <td><?= $k['jabatan']; ?></td>
                    <td><?= $k['alamat']; ?></td>
                    <td><?= $k['no_telepon']; ?></td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    </div>
<!-- /.container-fluid -->
</div>