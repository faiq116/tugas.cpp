<?php
include '../../app.php';
include './show.php';

if (isset($_POST['tombol'])) {
    $date = escapeString($_POST['date']);
    $job = escapeString($_POST['job']);
    $place = escapeString($_POST['place']);
    $description = escapeString($_POST['description']);

    $qUpdate = "UPDATE resumes SET date='$date', job='$job', place='$place', description='$description' WHERE id='$id'";

    $result = mysqli_query($connect, $qUpdate) or die(mysqli_error($connect));
    if ($result) {
        echo "
                <script>
                    alert('Data Berhasil Diubah');
                    window.location.href='../../pages/resume/index.php';
                </script>    
            ";
    } else {
        echo "
                    <script>
                    alert('Data Gagal Diubah');
                    window.location.href='../../pages/resume/create.php';
                </script> 
                ";
    }
}
