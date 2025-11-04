<?php
include '../../app.php';

if (isset($_POST['tombol'])) {
    $autor = escapeString($_POST['autor']);
    $title = escapeString($_POST['title']);
    $date = escapeString($_POST['date']);
    $description = escapeString($_POST['description']);
    $imageOld = $_FILES['image']['tmp_name'];
    $imageNew = time() . ".png";

    $storages = "../../../storages/blog/";

    if (move_uploaded_file($imageOld, $storages . $imageNew)) {
        $qInsert = "INSERT INTO blogs(autor, title, date, description,image) 
        VALUES('$autor','$title', '$date', '$description', '$imageNew')";

        mysqli_query($connect, $qInsert) or die(mysqli_error($connect));
        echo "
                <script>
                    alert('Data Berhasil Ditambah');
                    window.location.href='../../pages/blog/index.php';
                </script>    
            ";
    } else {
        echo "
                    <script>
                    alert('Data Gagal Ditambah');
                    window.location.href='../../pages/blog/create.php';
                </script> 
                ";
    }
}
