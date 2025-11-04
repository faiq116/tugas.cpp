<?php
include '../../config/connection.php';
include '../../config/escapeString.php';

if (isset($_POST['tombol'])) {
    $name = escapeString($_POST['name']);
    $email = escapeString($_POST['email']);
    $subject = escapeString($_POST['subject']);
    $message = escapeString($_POST['message']);

    $qInsert = "INSERT INTO contacs(name, email, subject, message) VALUES('$name', '$email', '$subject', '$message')";

    if (mysqli_query($connect, $qInsert)) {
        echo "
                <script>
                    alert('Data Berhasil Ditambah');
                    window.location.href='../index.php';
                </script>    
            ";
    } else {
        echo "
                    <script>
                    alert('Data Gagal Ditambah');
                    window.location.href='';
                </script> 
                ";
    }
}
