<main>

        <section class="news-detail-header-section text-center">
            <div class="section-overlay"></div>

            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12">
                        <h1 class="text-white">Konsultasi</h1>
                    </div>

                </div>
            </div>
        </section>
        <section class="section-padding" id="section_3">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 text-center mb-4">
                    <?= $this->session->flashdata('pesan'); ?>
                        <h2>Konsultasi</h2>
                        <p>Konsultasi mengenai kesehatan anak anda dengan tenaga ahli kami.<br>
                        Silahkan pilih sesuai dengan usia anak anda.</p>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="custom-block-wrap">
                            <img src="<?php echo base_url()?>assets/img/janin.jpg"
                                class="custom-block-image img-fluid" alt="">

                            <div class="custom-block">
                                <div class="custom-block-body">
                                    <h5 class="mb-3">Janin (Ibu Hamil)</h5>

                                    <p>Konsultasi mengenai kesehatan Janin anda dengan Dokter Spesialis kami.</p>

                                </div>

                                <a href="<?php echo base_url().'user/janin'?>" class="custom-btn btn">Konsultasi Sekarang</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="custom-block-wrap">
                            <img src="<?php echo base_url()?>assets/img/baby.jpg"
                                class="custom-block-image img-fluid" alt="">

                            <div class="custom-block">
                                <div class="custom-block-body">
                                    <h5 class="mb-3">Bayi</h5>

                                    <p>Konsultasi mengenai kesehatan Bayi anda dengan Dokter Spesialis kami.</p>

                                </div>

                                <a href="<?php echo base_url().'user/bayi'?>" class="custom-btn btn">Konsultasi Sekarang</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="custom-block-wrap">
                            <img src="<?php echo base_url()?>assets/img/balita.jpg"
                                class="custom-block-image img-fluid" alt="">

                            <div class="custom-block">
                                <div class="custom-block-body">
                                    <h5 class="mb-3">Balita</h5>

                                    <p>Konsultasi mengenai kesehatan Anak anda (Balita) anda dengan Dokter Spesialis kami.
                                    </p>

                                </div>

                                <a href="<?php echo base_url().'user/balita'?>" class="custom-btn btn">Konsultasi Sekarang</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="custom-block-wrap">
                            <img src="<?php echo base_url()?>assets/img/kidz5.jpg"
                                class="custom-block-image img-fluid" alt="">

                            <div class="custom-block">
                                <div class="custom-block-body">
                                    <h5 class="mb-3">Anak</h5>

                                    <p>Konsultasi mengenai kesehatan Anak anda (> 5 Tahun) anda dengan Dokter Spesialis kami.
                                    </p>

                                </div>

                                <a href="<?php echo base_url().'user/anak'?>" class="custom-btn btn">Konsultasi Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

       