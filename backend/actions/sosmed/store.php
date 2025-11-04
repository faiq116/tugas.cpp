<?php
include '../../app.php';

if (isset($_POST['tombol'])) {
    $link = escapeString($_POST['link']);
    $iconOld = $_FILES['icon']['tmp_name'];
    $iconNew = time() . ".png";

    $storages = "../../../storages/sosmed/";
    if (move_uploaded_file($iconOld, $storages . $iconNew)) {
        $qInsert = "INSERT INTO socmeds(link, icon) VALUES('$link','$iconNew')";

        mysqli_query($connect, $qInsert) or die(mysqli_error($connect));
        echo "
                <script>
                    alert('Data Berhasil Ditambah');
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
