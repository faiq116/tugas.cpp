<?php
include '../../app.php';
include './show.php';

if (isset($_POST['tombol'])) {
    $job = escapeString($_POST['job']);
     
    $iconNew = $servis->icon;
    $storages = "../../../storages/servis/";

    //cek apakah user mengupload gambar baru
    if (!empty($_FILES['icon']['tmp_name'])) {
        $iconOld = $_FILES['icon']['tmp_name'];
        $iconNew = time() . '.png';

        //hapus gambar lama jika ada
        if (!empty($servis->icon) && file_exists($storages . $servis->icon)) {
            unlink($storages . $servis->icon);
        }

        //simpan gambr baru
        move_uploaded_file($iconOld, $storages . $iconNew);
    }

    $qUpdate = "UPDATE services SET job='$job', icon='$iconNew' WHERE id='$id'";

    $result = mysqli_query($connect, $qUpdate) or die(mysqli_error($connect));
    if ($result) {
        echo "
                <script>
                    alert('Data Berhasil Diubah');
                    window.location.href='../../pages/servis/index.php';
                </script>    
            ";
    } else {
        echo "
                    <script>
                    alert('Data Gagal Diubah');
                    window.location.href='../../pages/servis/create.php';
                </script> 
                ";
    }
}
