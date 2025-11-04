<?php
include '../../app.php'; // pastikan koneksi $connect sudah tersedia

if (!isset($_GET['id'])) {
    echo "
        <script>
            alert('Tidak bisa memilih ID ini');
            window.location.href = '../../pages/project/index.php'
        </script>
        ";
    exit;
}

$id = escapeString($_GET['id']); // pakai escape untuk keamanan

$qSelect = "SELECT * FROM projects WHERE id = '$id'";
$result = mysqli_query($connect, $qSelect) or die(mysqli_error($connect));

$project = mysqli_fetch_object($result);
if (!$project) {
    die("Data tidak ditemukan");
}
