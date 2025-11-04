<?php
// Koneksi dan query
require_once(__DIR__ . '/../../config/connection.php');
$qServices = "SELECT * FROM services";
$services = mysqli_query($connect, $qServices) or die(mysqli_error($connect));
?>

<!-- Services Section -->
<section id="services" class="services section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <p>Layanan yang di berikan</p>
    </div><!-- End Section Title -->

    <div class="container">
        <div class="row">
            <?php while ($dataServices = mysqli_fetch_assoc($services)) : ?>
                <div class="col-md-4">
                    <div class="service-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="100">
                        <img src="../storages/servis/<?= ($dataServices['icon']) ?>" alt="icon"
                            style="width: 80px; height: 80px; object-fit: cover; margin-right: 15px; border: 2px solid #fff;">
                        <div>
                            <h4 class="title">
                                <a href="service-details.html" class="stretched-link"><?= htmlspecialchars($dataServices['job']) ?></a>
                            </h4>
                            <!-- <p class="description"><?= htmlspecialchars($dataServices['job']) ?></p> -->
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>

</section><!-- /Services Section -->