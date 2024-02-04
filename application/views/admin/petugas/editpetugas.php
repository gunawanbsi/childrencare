<div class="container-fluid">
    <h3> Ubah Data Petugas </h3>
    <?php foreach($petugas as $b) : ?>
                <form method="post" action="<?php echo base_url(). 'admin/ubahPetugas'?>">
                    <div class="form-group mb-2">
                        <label>Nama Petugas</label>
                        <input type="text" name="nama_petugas" class="form-control" value="<?php echo $b->nama_petugas ?>">
                    </div>
                    <div class="form-group mb-2">
                        <label>Email Petugas</label>
                        <input type="hidden" name="id" class="form-control" value="<?php echo $b->id ?>">
                        <input type="text" name="email_petugas" class="form-control" value="<?php echo $b->email_petugas ?>">
                    </div>
                    <div class="form-group mb-2">
                        <label>Jabatan</label>
                        <input type="text" name="jabatan" class="form-control" value="<?php echo $b->jabatan ?>">
                    </div>
                    <div class="form-group mb-2">
                        <label>Alamat</label>
                        <input type="text" name="alamat" class="form-control" value="<?php echo $b->alamat ?>">
                    </div>
                    <div class="form-group mb-2">
                        <label>Nomor Telepon</label>
                        <input type="text" name="no_telepon" class="form-control" value="<?php echo $b->no_telepon ?>">
                    </div>
                    
                    <button type="submit" class="btn btn-primary"> Simpan </button>
                    <button class="btn btn-dark" onclick="window.history.go(-1)"> Kembali </button>
                </form>
            <?php endforeach ?>
</div>