<?php
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$node_id = $_GET['node_id'];

// update data ke database
//mysqli_query($koneksi,"update user set username='$username', password='$password', level='$level' where id='$id'");
mysqli_query($koneksi,"update t_coaxial set kondisi='Form ditolak' where node_id='$node_id'");


// mengalihkan halaman kembali ke index.php
header("location:hub-coaxial-tampil.php");

?>
