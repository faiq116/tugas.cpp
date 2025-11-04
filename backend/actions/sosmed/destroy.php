<?php
include '../../app.php';
include './show.php';

$storages = "../../../storages/sosmed/";

//Hapus gambar jika aada
if (!empty($sosmed->image) && file_exists($storages . $sosmed->image)) {
    unlink($storages . $sosmed->image);
}

//hapus data
$qDelete = "DELETE FROM socmeds WHERE id = '$sosmed->id'";
$result = mysqli_query($connect, $qDelete) or die(mysqli_error($connect));

//cek apakah data berhasil di hapus atau tidak
if ($result) {
    echo "
                <script>
                    alert('Data Berhasil Dihapus');
                    window.location.href='../../pages/sosmed/index.php';
                </script>    
            ";
} else {
    echo "
                    <script>
                    alert('Data Gagal Dihapus');
                    window.location.href='../../pages/sosmed/create.php';
                </script> 
                ";
}
