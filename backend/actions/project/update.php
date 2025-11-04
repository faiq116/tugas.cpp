<?php
include '../../app.php';

if (isset($_POST['tombol'])) {
    $id = escapeString($_POST['id']); // Ambil ID dari form
    $job = escapeString($_POST['job']);
    $title = escapeString($_POST['title']);
    $description = escapeString($_POST['description']);

    // Ambil data lama dari DB
    $query = "SELECT * FROM projects WHERE id = '$id'";
    $result = mysqli_query($connect, $query);
    $project = mysqli_fetch_object($result);

    $imageNew = $project->image;
    $storages = "../../../storages/project/";

    // Jika upload file baru
    if (!empty($_FILES['image']['tmp_name'])) {
        $imageOld = $_FILES['image']['tmp_name'];
        $imageNew = time() . '-' . basename($_FILES['image']['name']);

        // Hapus gambar lama
        if (!empty($project->image) && file_exists($storages . $project->image)) {
            unlink($storages . $project->image);
        }

        // Simpan gambar baru
        move_uploaded_file($imageOld, $storages . $imageNew);
    }

    // Update data
    $qUpdate = "UPDATE projects SET job='$job', title='$title', description='$description', image='$imageNew' WHERE id='$id'";
    $result = mysqli_query($connect, $qUpdate) or die(mysqli_error($connect));

    if ($result) {
        echo "
            <script>
                alert('Data Berhasil Diubah');
                window.location.href='../../pages/project/index.php';
            </script>";
    } else {
        echo "
            <script>
                alert('Data Gagal Diubah');
                window.location.href='../../pages/project/edit.php?id=$id';
            </script>";
    }
}
