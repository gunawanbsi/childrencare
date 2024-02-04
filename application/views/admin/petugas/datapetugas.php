<div class="container-fluid">
    <?= $this->session->flashdata('pesan'); ?>
            <?php if(validation_errors()){?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors();?>
                </div>
            <?php }?>
            <?= $this->session->flashdata('pesan'); ?>
            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#PetugasBaruModal"><i class="fas fa-file-alt"></i> Tambah Petugas</a>
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
                    <td>
                        <a href="<?=base_url('admin/editPetugas/') . $k['id'];?>" class="badge badge-info"><i class="fas fa-edit"></i> Ubah</a>
                        <a href="<?=base_url('admin/hapusPetugas/') . $k['id'];?>" onclick="return confirm('Kamu yakin akan menghapus <?= $judul.' '.$k['nama_petugas'];?>?');" class="badge badge-danger"><i class="fas fa-trash"></i>Hapus</a>
                    </td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
<!-- Modal Tambah kategori baru-->
<div class="modal fade" id="PetugasBaruModal" tabindex="-1" role="dialog" aria-labelledby="PetugasBaruModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="=PetugasBaruModalLabel">Tambah Data Petugas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo base_url(). 'admin/createPetugas'; ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" name="nama_petugas" id="nama_petugas" placeholder="Masukan Nama Petugas" class="form-control form-control-user">
                    </div>
                    <div class="form-group">
                        <input type="text" name="email_petugas" id="email_petugas" placeholder="Masukan Email Petugas" class="form-control form-control-user">
                    </div>
                    <div class="form-group">
                        <input type="text" name="jabatan" id="jabatan" placeholder="Masukan Jabatan Petugas" class="form-control form-control-user">
                    </div>
                    <div class="form-group">
                        <input type="text" name="alamat" id="alamat" placeholder="Masukan Alamat Petugas" class="form-control form-control-user">
                    </div>
                    <div class="form-group">
                        <input type="text" name="no_telepon" id="no_telepon" placeholder="Masukan Nomor Telepon Petugas" class="form-control form-control-user">
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10">
                            <input type="file" class="form-control form-control-user ms-2" id="image" name="image">
                            <label class="custom-file-label ms-2"for="image">Pilih file</label>
                                    
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-ban"></i> Close</button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
                </div>
<!-- End of Modal Tambah Mneu -->