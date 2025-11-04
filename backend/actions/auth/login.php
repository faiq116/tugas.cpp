<?php
session_start();
include '../../app.php';


//mengecek apakah form di kirim dengan method POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    $qSelect = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($connect, $qSelect);

    //mengecek apakah ada hasil query tadi, ada 1 atau lebi baris yang cocok,artinya email terdaftar di data base
    if ($result->num_rows > 0) { //num_rows untuk mengecek variabel result dapet gk data di database
        $row = $result->fetch_object();
        //pssword_verify()
        //mencocockkan $password inpput dari user dengan $row->password dari database
        //klo memang cocok password benar mak lanjut untuk login
        if (password_verify($password, $row->password)) {
            //menyimpan informasi user ke session, fungsinya untk/sistem/aplikasi tahu siapa yang sedang login
            $_SESSION['email'] = $email;
            $_SESSION['username'] = $row->username;
            echo "
                <script>
                 alert('Berhasil Login');
                 window.location.href='../../pages/dashboard/index.php';
                </script>    
            ";
        } else {
            echo "
                <script>
                 alert('Password Salah');
                 window.location.href='../../pages/auth/login.php';
                </script>
            ";
        }
    } else {
        echo "
            <script>
             alert('Email salah atau belum terdaftar');
             window.location.href='../../pages/auth/login.php';
            </script>
                ";
    }
}
