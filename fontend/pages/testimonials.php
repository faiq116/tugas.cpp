<section id="testimonials" class="testimonials section light-background">
    <div class="container section-title" data-aos="fade-up">
        <h2>Testimoni</h2>
        <p>Beberapa testimoni dari konsumen</p>
    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper init-swiper">
            <script type="application/json" class="swiper-config">
                {
                    "loop": true,
                    "speed": 600,
                    "autoplay": {
                        "delay": 5000
                    },
                    "slidesPerView": "auto",
                    "pagination": {
                        "el": ".swiper-pagination",
                        "type": "bullets",
                        "clickable": true
                    },
                    "breakpoints": {
                        "320": {
                            "slidesPerView": 1,
                            "spaceBetween": 40
                        },
                        "1200": {
                            "slidesPerView": 3,
                            "spaceBetween": 1
                        }
                    }
                }
            </script>
            <div class="swiper-wrapper">
                <?php
                // Ambil semua data testimoni
                $qTestimonials = "SELECT * FROM testimonials";
                $testimonials = mysqli_query($connect, $qTestimonials) or die(mysqli_error($connect));
                while ($dataTestimonials = mysqli_fetch_assoc($testimonials)) :
                ?>
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span><?= $dataTestimonials['description'] ?></span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                            <img src="../storages/testimonials/<?= $dataTestimonials['image'] ?>" class="testimonial-img" alt="<?= $dataTestimonials['name'] ?>">
                            <h3><?= $dataTestimonials['name'] ?></h3>
                            <h4><?= $dataTestimonials['job'] ?></h4>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>