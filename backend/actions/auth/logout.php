<?php
session_start(); //untuk memulai sesi $_SESSION
session_unset(); //menghpus semua variabel sesi, artinya semua data yng ada di $_SESSION akan di hapus
session_destroy(); //menghancurkan sesi sepenuhnya, dan sesi akan di hapus di server

echo "
        <script>
            alert('Berhasil Logout');
            window.location.href='../../pages/auth/login.php';
        </script>  
     ";
