<?php
require_once(__DIR__ . '/../../config/connection.php');

// Ambil data untuk Education (id 3, 4, 5)
$qEducation = "SELECT * FROM resumes WHERE id IN (1) ORDER BY date DESC";
$resEducation = mysqli_query($connect, $qEducation);

// Ambil data untuk Professional Experience (id 1, 2)
$qExperience = "SELECT * FROM resumes WHERE id IN (2) ORDER BY date DESC";
$resExperience = mysqli_query($connect, $qExperience);
?>


<!-- Resume Section -->
<section id="resume" class="resume section">
    <div class="container section-title" data-aos="fade-up">
        <h2>Resume</h2>
        <p>Riwayat saya.</p>
    </div>

    <div class="container">
        <div class="row">

            <!-- Bagian Education -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <h3 class="resume-title">Pendidikan</h3>
                <?php while ($res = mysqli_fetch_assoc($resEducation)) : ?>
                    <div class="resume-item">
                        <h4><?= htmlspecialchars($res['date']) ?></h4>
                        <h5><?= htmlspecialchars($res['job']) ?></h5>
                        <p><em><?= htmlspecialchars($res['place']) ?></em></p>
                        <p><?= htmlspecialchars($res['description']) ?></p>
                    </div>
                <?php endwhile; ?>
            </div>

            <!-- Bagian Professional Experience -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <h3 class="resume-title">Pengalaman</h3>
                <?php while ($res = mysqli_fetch_assoc($resExperience)) : ?>
                    <div class="resume-item">
                        <h4><?= htmlspecialchars($res['date']) ?></h4>
                        <h5><?= htmlspecialchars($res['job']) ?></h5>
                        <p><em><?= htmlspecialchars($res['place']) ?></em></p>
                        <p><?= htmlspecialchars($res['description']) ?></p>
                    </div>
                <?php endwhile; ?>
            </div>

        </div>
    </div>
</section>