<?php
// koneksi database
include '../koneksi.php';

// menangkap data id yang di kirim dari url
$node_id = $_GET['node_id'];


// menghapus data dari database
mysqli_query($koneksi,"delete from t_hub where node_id='$node_id' ");

// mengalihkan halaman kembali ke index.php
header("location:hub-form-tampil.php");

?>
