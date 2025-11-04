<?php
session_start();
include '../../app.php';
//mengecek apakah user sudah  login 
if (!isset($_SESSION['email'])) {
    echo "
      <script>
          alert('Anda Harus Login Dahulu');
          window.location.href='../auth/login.php';
      </script>    
  ";
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link rel="shortcut icon" type="image/png" href="../../admin.tamplate/assets/images/logos/favicon.png" />
    <link rel="stylesheet" href="../../admin.tamplate/assets/css/styles.min.css" />

</head>