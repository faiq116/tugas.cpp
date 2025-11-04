<?php
include '../../app.php';

if (isset($_POST['tombol'])) {
    $job = escapeString($_POST['job']);
    $iconOld = $_FILES['icon']['tmp_name'];
    $iconNew = time() . ".png";
    $storages = "../../../storages/servis/";

    if (move_uploaded_file($iconOld, $storages . $iconNew)) {
        $qInsert = "INSERT INTO services(job, icon) VALUES('$job','$iconNew')";

        mysqli_query($connect, $qInsert) or die(mysqli_error($connect));
        echo "
                <script>
                    alert('Data Berhasil Ditambah');
                    window.location.href='../../pages/servis/index.php';
                </script>    
            ";
    } else {
        echo "
                    <script>
                    alert('Data Gagal Ditambah');
                    window.location.href='../../pages/servis/create.php';
                </script> 
                ";
    }
}
