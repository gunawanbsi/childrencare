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
            <a href="<?= base_url('laporan/Cetak_User'); ?>" class="btn btn-primary mb-3"><i class="fas fa-print"></i> Print</a>
            <a href="<?= base_url('laporan/pdf_User'); ?>" class="btn btn-warning mb-3"><i class="far fa-file-pdf"></i> Download Pdf</a>
            <a href="<?= base_url('laporan/excel_User'); ?>" class="btn btn-success mb-3"><i class="far fa-file-excel"></i> Export ke Excel</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Jadi Member Sejak</th>
                        <th scope="col">Image</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $a = 1;
                        foreach ($member as $b) { ?>
                    <tr>
                        <th scope="row"><?= $a++; ?></th>
                        <td><?= $b['nama']; ?></td>
                        <td><?= $b['email']; ?></td>
                        <td><?= date('d F Y', $b['tanggal_input']); ?></td>
                        <td>
                            <picture>
                                <source srcset="" type="image/svg+xml">
                                <img src="<?= base_url('assets/img/profile/') . $b['image']; ?>" class="img-fluid img-thumbnail" alt="..." style="width:60px;height:80px;">
                            </picture>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    </div>
<!-- /.container-fluid -->
</div>