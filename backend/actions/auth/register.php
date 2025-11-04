<?php
include '../../app.php';

//mengecek apakah form di kirim dengan method POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //htmlentities digunakan untuk mencegah input aneh2
    //password_hash digunkan untuk menge-enkripsi password dengan aman (bcrypt default)
    $username = htmlentities($_POST['username']);
    $email = htmlentities($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);


    $qInsert = "INSERT INTO users(username, email, password) VALUES('$username', '$email', '$password')";

    if (mysqli_query($connect, $qInsert)) {
        echo "
            <script>
                alert('Akun Berhasil Dibuat');
                window.location.href='../../pages/auth/login.php';
            </script>    
        ";
    } else {
        echo "
            <script>
                alert('Akun Gagal Dibuat : " . mysqli_error($connect) . "');
                window.location.href='../../pages/auth/register.php';
            </script> 
        ";
    }
}
