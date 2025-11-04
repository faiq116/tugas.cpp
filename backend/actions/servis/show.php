<?php
if (!isset($_GET['id'])) {
    echo "
        <script>
            alert('Tidak bisa memilih ID ini');
            window.location.href = '../../pages/servis/index.php'
        </script>
        ";
}

$id = $_GET['id'];

$qSelect = "SELECT * FROM services WHERE id= '$id'";
$result = mysqli_query($connect, $qSelect) or die(mysqli_error($connect));

$servis = $result->fetch_object();
if (!$servis) {
    die("Data tidak ditemukan");
}
