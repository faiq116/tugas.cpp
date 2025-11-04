<?php
// Koneksi dan query
require_once(__DIR__ . '/../../config/connection.php');
$qProject = "SELECT * FROM projects";
$projects = mysqli_query($connect, $qProject) or die(mysqli_error($connect));
?>

<!-- Portfolio Section -->
<section id="portfolio" class="portfolio section light-background">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Project</h2>
        <p>Beberapa Project Saat Melakukan PKL di PT Lauwba Tecno Indonesia</p>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
            <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                <?php while ($dataProject = mysqli_fetch_assoc($projects)) : ?>
                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                        <div class="portfolio-content h-100">
                            <img src="../storages/project/<?= htmlspecialchars($dataProject['image']) ?>" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4><?= htmlspecialchars($dataProject['title']) ?></h4>
                                <p><?= htmlspecialchars($dataProject['job']) ?></p>

                                <a href="../storages/project/<?= htmlspecialchars($dataProject['image']) ?>"
                                    title="<?= htmlspecialchars($dataProject['title']) ?>"
                                    data-gallery="portfolio-gallery-app"
                                    class="glightbox preview-link">
                                    <i class="bi bi-zoom-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>

        </div><!-- End Portfolio Container -->

    </div>

    </div>

</section><!-- /Portfolio Section -->