<?php
// koneksi database
include '../koneksi.php';

// menangkap data id yang di kirim dari url
$regional = $_GET['regional'];


// menghapus data dari database
mysqli_query($koneksi,"delete from node where regional='$regional' ");

// mengalihkan halaman kembali ke index.php
header("location:node-tampil.php");

?>
