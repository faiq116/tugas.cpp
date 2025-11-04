<?php
include '../../app.php'; // pastikan koneksi $connect sudah tersedia

if (!isset($_GET['id'])) {
    echo "
        <script>
            alert('Tidak bisa memilih ID ini');
            window.location.href = '../../pages/resume/index.php'
        </script>
        ";
    exit;
}

$id = escapeString($_GET['id']); // pakai escape untuk keamanan

$qSelect = "SELECT * FROM resumes WHERE id = '$id'";
$result = mysqli_query($connect, $qSelect) or die(mysqli_error($connect));

$resume = mysqli_fetch_object($result);
if (!$resume) {
    die("Data tidak ditemukan");
}
