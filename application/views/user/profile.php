<section class="section-padding section-bg" id="section_2">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                        <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>"
                            class="custom-text-box-image img-fluid" alt="">
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="custom-text-box">
                         <?= $this->session->flashdata('pesan'); ?>
                            <h2 class="mb-2">Profil</h2>

                            <h5 class="mb-3">Nama Orangtua : <?= $user['nama']; ?></h5>

                            <p>Email : <?= $user['email']; ?></p><br>
                            <p>Jadi member sejak: <br><b><?= date('d F Y', $user['tanggal_input']); ?></b></p>
                            <br>
                            <a href="<?= base_url('user/ubahprofil'); ?>"class="custom-btn btn"> Ubah Profil</a>
                        </div>

                </div>
            </div>
</section>