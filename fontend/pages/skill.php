<?php
// require_once('../../config/connection.php');
require_once(__DIR__ . '/../../config/connection.php');

$qSkill = "SELECT * FROM skills";
$skill = mysqli_query($connect, $qSkill) or die(mysqli_error($connect));
?>

<!-- Skills Section -->
<section id="skills" class="skills section light-background">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Skills</h2>
        <p>Skill yang saya kuasai</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row skills-content skills-animation">
            <div class="col-lg-12">
                <?php while ($dataSkill = mysqli_fetch_assoc($skill)) : ?>
                    <div class="progress mb-4">
                        <span class="skill d-flex justify-content-between">
                            <span><?= htmlspecialchars($dataSkill['skill']) ?></span>
                            <i class="val"><?= (int)$dataSkill['percent'] ?>%</i>
                        </span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar"
                                role="progressbar"
                                data-skill="<?= (int)$dataSkill['percent'] ?>"
                                aria-valuenow="0"
                                aria-valuemin="0"
                                aria-valuemax="100">
                            </div>
                        </div>

                        <!-- Deskripsi skill -->
                        <div class="skill-description mt-2 rounded" style="font-size: 14px; color: #444;">
                            <?= nl2br(htmlspecialchars($dataSkill['description'] ?? 'Belum ada deskripsi.')) ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</section><!-- /Skills Section -->

<!-- CSS untuk animasi -->
<style>
    .progress-bar {
        width: 0;
        height: 20px;
        background-color: #4caf50;
        transition: width 2s ease-in-out;
    }

    .progress-bar-wrap {
        background: #f0f0f0;
        border-radius: 4px;
        overflow: hidden;
    }

    .skill {
        font-weight: 600;
        margin-bottom: 5px;
    }

    .val {
        float: right;
        color: #100;
    }
</style>

<!-- JavaScript untuk animasi saat scroll -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const progressBars = document.querySelectorAll(".progress-bar");

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const bar = entry.target;
                    const target = bar.getAttribute("data-skill");
                    bar.style.width = target + "%";
                    bar.setAttribute("aria-valuenow", target);
                    observer.unobserve(bar); // Jalankan animasi hanya sekali
                }
            });
        }, {
            threshold: 0.6
        });

        progressBars.forEach(bar => {
            observer.observe(bar);
        });
    });
</script>