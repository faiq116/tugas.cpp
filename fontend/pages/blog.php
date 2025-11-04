<?php
require_once(__DIR__ . '/../../config/connection.php');

$qBlog = "SELECT * FROM blogs LIMIT 1";
$blog = mysqli_query($connect, $qBlog) or die(mysqli_error($connect));
$dataBlog  = mysqli_fetch_assoc($blog);
?>

<!-- Blog Section -->
<section id="blog" class="blog section">
    <!-- Tambahkan Style Langsung di Sini -->
    <style>
        /* Gaya untuk gambar blog */
        .blog-img {
            border: 3px solid #ccc;
            border-radius: 10px;
            padding: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .blog-img:hover {
            transform: scale(1.02);
        }

        /* Gaya untuk daftar artikel */
        .blog ul {
            list-style: none;
            padding-left: 0;
        }

        .blog ul li {
            margin-bottom: 10px;
            font-size: 16px;
        }

        .blog ul li i {
            color: #0d6efd;
            margin-right: 6px;
        }

        .blog .content h2 {
            font-weight: bold;
            margin-bottom: 30px;
        }

        .blog .content {
            padding-left: 20px;
        }
    </style>

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Blog Saya</h2>
    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4 justify-content-center align-items-center">
            <div class="col-lg-6">
                <img src="../storages/blog/<?= $dataBlog['image'] ?>" class="img-fluid blog-img w-100" alt="Gambar Blog">
            </div>
            <div class="col-lg-6 content">

                <h2>Artikel Saya</h2>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="blog-meta">
                            <div class="mb-3">
                                <h5>Tanggal:</h5>
                                <p><?= $dataBlog['date'] ?></p>
                            </div>
                            <div class="mb-3">
                                <h5>Pembuat:</h5>
                                <p><?= $dataBlog['autor'] ?></p>
                            </div>
                            <div class="mb-3">
                                <h5>Judul:</h5>
                                <p><?= $dataBlog['title'] ?></p>
                            </div>
                            <div class="mb-3">
                                <h5>Deskripsi:</h5>
                                <p style="text-align: justify; line-height: 1.7;"><?= nl2br($dataBlog['description']) ?></p>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>