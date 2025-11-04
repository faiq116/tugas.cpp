<?php
include '../../app.php';
include './show.php';

if (isset($_POST['tombol'])) {
    $name = escapeString($_POST['name']);
    $job = escapeString($_POST['job']);
    $description = escapeString($_POST['description']);
    $imageNew = $testimonials->image;
    $storages = "../../../storages/testimonials/";

    //cek apakah user mengupload gambar baru
    if (!empty($_FILES['image']['tmp_name'])) {
        $imageOld = $_FILES['image']['tmp_name'];
        $imageNew = time() . '.png';

        //hapus gambar lama jika ada
        if (!empty($about->image) && file_exists($storages . $about->image)) {
            unlink($storages . $about->image);
        }

        //simpan gambr baru
        move_uploaded_file($imageOld, $storages . $imageNew);
    }

    $qUpdate = "UPDATE testimonials SET name='$name', job='$job', description='$description', image='$imageNew' WHERE id='$id'";

    $result = mysqli_query($connect, $qUpdate) or die(mysqli_error($connect));
    if ($result) {
        echo "
                <script>
                    alert('Data Berhasil Diubah');
                    window.location.href='../../pages/testimonials/index.php';
                </script>    
            ";
    } else {
        echo "
                    <script>
                    alert('Data Gagal Diubah');
                    window.location.href='../../pages/testimonials/create.php';
                </script> 
                ";
    }
}
