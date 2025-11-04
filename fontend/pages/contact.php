<?php
// Koneksi dan query
require_once(__DIR__ . '/../../config/connection.php');
$qAbout = "SELECT * FROM abouts";
$about = mysqli_query($connect, $qAbout) or die(mysqli_error($connect));
?>

<!-- Contact Section -->
<section id="contact" class="contact section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Kontak</h2>
        <p>Jik ingin menghubingi saya disini</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

            <div class="col-lg-5">

                <div class="info-wrap">
                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h3>Alamat</h3>
                            <p><span class="mr-2"></span><?= $dataAbout['address'] ?></span></p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-telephone flex-shrink-0"></i>
                        <div>
                            <h3>No Telepone</h3>
                            <p><span class="mr-2"></span><?= $dataAbout['phone'] ?></span></p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h3>Email</h3>
                            <p><span class="mr-2"></span><?= $dataAbout['email'] ?></span></p>
                        </div>
                    </div><!-- End Info Item -->

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d342.35186625694956!2d110.26687559821957!3d-7.932309858960748!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7afe5b7554529f%3A0xaee6f7f31546ef8!2s3798%2B2PV%2C%20Mangiran%2C%20Trimurti%2C%20Srandakan%2C%20Bantul%20Regency%2C%20Special%20Region%20of%20Yogyakarta%2055762!5e1!3m2!1sen!2sid!4v1753265994582!5m2!1sen!2sid" frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <?php
            // Tampilkan alert jika ada status
            if (isset($_GET['status'])) {
                if ($_GET['status'] === 'success') {
                    echo '<div class="alert alert-success">Pesan berhasil dikirim!</div>';
                } elseif ($_GET['status'] === 'error') {
                    echo '<div class="alert alert-danger">Gagal mengirim pesan!</div>';
                }
            }
            ?>

            <!-- Form Kontak -->
            <div class="col-lg-7">
                <form action="./actions/contact.php" method="POST" enctype="multipart/form-data">
                    <div class="row gy-4">

                        <div class="col-md-6">
                            <label for="name" class="pb-2">Nama Anda</label>
                            <input type="text" name="name" id="name-field" class="form-control">
                        </div>

                        <div class="col-md-6">
                            <label for="email" class="pb-2">Email</label>
                            <input type="email" class="form-control" name="email" id="email">
                        </div>

                        <div class="col-md-12">
                            <label for="subject" class="pb-2">Judul Pesan</label>
                            <input type="text" class="form-control" name="subject" id="subject">
                        </div>

                        <div class="col-md-12">
                            <label for="message" class="pb-2">Pesan</label>
                            <textarea class="form-control" name="message" rows="10" id="message"></textarea>
                        </div>

                        <div class="col-md-12 text-center">

                        </div>

                    </div>
                    <button class="btn btn-primary" type="submit" name="tombol">Kirim</button>
                </form>
            </div><!-- End Contact Form -->


        </div>

    </div>

</section><!-- /Contact Section -->