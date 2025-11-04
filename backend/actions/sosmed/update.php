<?php
include '../../app.php';
include './show.php';

if (isset($_POST['tombol'])) {

    $link = escapeString($_POST['link']);  
    $iconNew = $sosmed->icon;
    $storages = "../../../storages/sosmed/";

    //cek apakah user mengupload gambar baru
    if (!empty($_FILES['icon']['tmp_name'])) {
        $iconOld = $_FILES['icon']['tmp_name'];
        $iconNew = time() . '.png';

        //hapus gambar lama jika ada
        if (!empty($sosmed->icon) && file_exists($storages . $sosmed->icon)) {
            unlink($storages . $sosmed->icon);
        }

        //simpan gambr baru
        move_uploaded_file($iconOld, $storages . $iconNew);
    }

    $qUpdate = "UPDATE socmeds SET link='$link', icon='$iconNew' WHERE id='$id'";

    $result = mysqli_query($connect, $qUpdate);
    if ($result) {
        echo "
                <script>
                    alert('Data Berhasil Diubah');
                    window.location.href='../../pages/sosmed/index.php';
                </script>    
            ";
    } else {
        echo "
                    <script>
                    alert('Data Gagal Ditambah');
                    window.location.href='../../pages/sosmed/create.php';
                </script> 
                ";
    }
}
