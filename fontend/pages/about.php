 <?php
    // require_once('../../config/connection.php');
    require_once(__DIR__ . '/../../config/connection.php');

    $qAbout = "SELECT * FROM abouts LIMIT 1";
    $about = mysqli_query($connect, $qAbout) or die(mysqli_error($connect));
    $dataAbout = mysqli_fetch_assoc($about);
    ?>


 <!-- About Section -->
 <section id="about" class="about section">
     <!-- Section Title -->
     <div class="container section-title" data-aos="fade-up">
         <h2>Tentang Saya</h2>
         <p>Saya Faiq Nadhif Adiwinata Siswa SMK Negeri 1 Sanden, Jurusan Rekayasa Perangkat Lunak (RPL)
             Selama menempuh pendidikan di SMK, saya aktif dalam mengikuti mata pelajaran produktif di bidang kejuruan. Dan di luar kegiatan sekolah, saya juga berjualan kopi, sebagai bentuk kemandirian dan jiwa kewirausahaan</p>
     </div><!-- End Section Title -->


     <div class="container" data-aos="fade-up" data-aos-delay="100">

         <div class="row gy-4 justify-content-center">
             <div class="col-lg-4">
                 <img src="../storages/about/<?= $dataAbout['image'] ?>" class="img-fluid" alt="">
             </div>
             <div class="col-lg-8 content">
                 <h2>Web Developer.</h2>
                 <p class="fst-italic py-3">
                     Selama Praktik Kerja Lapangan (PKL) saya belajar tentang Web Developer
                 </p>
                 <div class="row">
                     <div class="col-lg-6">
                         <ul>
                             <li><i class="bi bi-chevron-right"></i> <strong>Nama:</strong><span class="mr-2"></span><?= $dataAbout['name'] ?></span></li>
                             <li><i class="bi bi-chevron-right"></i> <strong>Tanggal Lahir:</strong><span class="mr-2"></span><?= $dataAbout['born'] ?></span></li>
                             <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong><span class="mr-2"></span><?= $dataAbout['email'] ?></span></li>
                             <li><i class="bi bi-chevron-right"></i> <strong>Alamat:</strong><span class="mr-2"></span><?= $dataAbout['address'] ?></span></li>

                         </ul>
                     </div>
                     <div class="col-lg-6">
                         <ul>
                             <li><i class="bi bi-chevron-right"></i> <strong>Total Project:</strong><span class="mr-2"></span><?= $dataAbout['total_project'] ?></span></li>
                             <li><i class="bi bi-chevron-right"></i> <strong>Kode Pos:</strong><span><?= $dataAbout['zip_code'] ?></span></li>
                             <li><i class="bi bi-chevron-right"></i> <strong>No Telepone:</strong><span><?= $dataAbout['phone'] ?></span></li>
                             <li><i class="bi bi-chevron-right"></i> <strong>Pekerjaan:</strong><span><?= $dataAbout['work'] ?></span></li>
                         </ul>
                     </div>
                 </div>

             </div>
         </div>

     </div>
 </section><!-- /About Section -->