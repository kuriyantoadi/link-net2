<?php
session_start();
if($_SESSION['status']!="login"){
  header("location:../login.php?pesan=belum_login");
}
?>

<?php include 'pimpinan-tampil.php'; ?>
