<?php
require_once(__DIR__ . '/../../config/connection.php');

$qSocmeds = "SELECT * FROM socmeds";
$socmeds = mysqli_query($connect, $qSocmeds) or die(mysqli_error($connect));
?>

<div class="social-links text-center">
    <?php while ($dataSocmeds = mysqli_fetch_assoc($socmeds)) : ?>
        <a href="<?= $dataSocmeds['link'] ?>">
            <img src="../storages/sosmed/<?= htmlspecialchars($dataSocmeds['icon']) ?>" alt="icon" style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover;">
        </a>
    <?php endwhile; ?>
</div>