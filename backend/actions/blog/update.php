<?php
include '../../app.php';
include './show.php';

if (isset($_POST['tombol'])) {
    $autor = escapeString($_POST['autor']);
    $title = escapeString($_POST['title']);
    $date = escapeString($_POST['date']);
    $description = escapeString($_POST['description']);

    $imageNew = $blog->image;
    $storages = "../../../storages/blog/";

    //cek apakah user mengupload gambar baru
    if (!empty($_FILES['image']['tmp_name'])) {
        $imageOld = $_FILES['image']['tmp_name'];
        $imageNew = time() . '.png';

        //hapus gambar lama jika ada
        if (!empty($blog->image) && file_exists($storages . $blog->image)) {
            unlink($storages . $blog->image);
        }

        //simpan gambr baru
        move_uploaded_file($imageOld, $storages . $imageNew);
    }

    $qUpdate = "UPDATE blogs SET autor='$autor', title='$title', date='$date', description='$description', image='$imageNew' WHERE id='$id'";

    $result = mysqli_query($connect, $qUpdate) or die(mysqli_error($connect));
    if ($result) {
        echo "
                <script>
                    alert('Data Berhasil Diubah');
                    window.location.href='../../pages/blog/index.php';
                </script>    
            ";
    } else {
        echo "
                    <script>
                    alert('Data Gagal Diubah');
                    window.location.href='../../pages/blog/create.php';
                </script> 
                ";
    }
}
