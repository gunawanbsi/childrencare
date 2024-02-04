<section class="section-padding" id="section_3">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 text-center mb-4">
                    <?= $this->session->flashdata('pesan'); ?>
                        <h2>Konsultasi Anak</h2>
                        <p>Konsultasi mengenai anak anda dengan Dokter kami.<br>
                        Berikut adalah Dokter Spesialis Kandungan.</p>
                    </div>
                    <?php foreach ($petugas as $h) : ?>
                    <div class="col-lg-5 col-md-6 col-12 mb-4 mb-lg-0 ms-5" align="center">
                        <div class="custom-block-wrap">
                            <img src="<?php echo base_url().'/assets/img/upload/'.$h->image ?>"
                                class="custom-block-image img-fluid" alt="">

                            <div class="custom-block">
                                <div class="custom-block-body">
                                    <h5 class="mb-3"><?php echo $h->nama_petugas ?></h5>

                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>
                </div>
            </div>
            <div class="col-lg-12 col-12 text-center mb-5 mt-5">
                <h2>Form Konsultasi</h2>
                <form method="post" action="<?= base_url('user/proseskonsul'); ?>" style="margin-left: 10rem;">
                    <div class="form-outline mb-3 col-lg-10">
                        <input type="text" class="form-control form-lg" placeholder="Nama Pasien" id="nama_pasien" name="nama_pasien">
                        <?= form_error('nama_pasien', '<small class="alert-danger">', '</small>'); ?>
                    </div>
                    <div class="form-outline mb-3 col-lg-10">
                        <input type="text"  class="form-control form-lg" placeholder="Alamat Pasien" id="alamat" name="alamat">
                        <?= form_error('alamat', '<small class="alert-danger">', '<small>'); ?>
                    </div>
                    <div class="form-outline mb-3 col-lg-10">
                        <select class="form-control form-lg" placeholder="Jenis Kelamin" id="jenis_kelamin" name="jenis_kelamin">
                            <option>Jenis Kelamin</option>
                            <option>Laki-laki</option>
                            <option>Perempuan</option>
                        </select>
                    </div>
                    <div class="form-outline mb-3 col-lg-10">
                        <input type="text"  class="form-control form-lg" placeholder="Tanggal Lahir" id="tgl_lahir" name="tgl_lahir">
                        <?= form_error('tgl_lahir', '<small class="alert-danger">', '<small>'); ?>
                    </div>
                    <div class="form-outline mb-3 col-lg-10">
                        <input type="hidden"  class="form-control form-lg" placeholder="Kategori Anak" name="kategori_anak" value="4">
                    </div>
                    <div class="form-outline mb-3 col-lg-10">
                        <input type="number"  class="form-control form-lg" placeholder="Berat Badan" id="berat_badan" name="berat_badan">
                    </div>
                    <div class="form-outline mb-3 col-lg-10">
                        <input type="number"  class="form-control form-lg" placeholder="Tinggi Badan" id="tinggi_badan" name="tinggi_badan">
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                    <div class="text-center text-lg-start mt-4 pt-2">
                        <input type="submit" class="custom-btn btn" style="padding-left: 2.5rem; padding-right: 2.5rem;" value="Daftar Konsultasi">
                    </div>

                </form>
            </div>
</section>