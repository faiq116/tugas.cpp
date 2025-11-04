<?php
if (!isset($_GET['id'])) {
    echo "
        <script>
            alert('Tidak bisa memilih ID ini');
            window.location.href = '../../pages/sosmed/index.php'
        </script>
        ";
}

$id = $_GET['id'];

$qSelect = "SELECT * FROM socmeds WHERE id= '$id'";
$result = mysqli_query($connect, $qSelect) or die(mysqli_error($connect));

$sosmed = $result->fetch_object();
if (!$sosmed) {
    die("Data tidak ditemukan");
}
