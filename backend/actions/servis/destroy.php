<?php
include '../../app.php';
include './show.php';

$storages = "../../../storages/servis/";

//Hapus gambar jika aada
if (!empty($servis->image) && file_exists($storages . $servis->image)) {
    unlink($storages . $servis->image);
}

//hapus data
$qDelete = "DELETE FROM services WHERE id = '$servis->id'";
$result = mysqli_query($connect, $qDelete) or die(mysqli_error($connect));

//cek apakah data berhasil di hapus atau tidak
if ($result) {
    echo "
                <script>
                    alert('Data Berhasil Dihapus');
                    window.location.href='../../pages/servis/index.php';
                </script>    
            ";
} else {
    echo "
                    <script>
                    alert('Data Gagal Dihapus');
                    window.location.href='../../pages/servis/create.php';
                </script> 
                ";
}
