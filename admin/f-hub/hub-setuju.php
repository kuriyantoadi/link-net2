<?php
// koneksi database
include '../koneksi.php';

// menangkap data id yang di kirim dari url
$node_id = $_POST['node_id'];
$node_des = $_POST['node_des'];
$regional = $_POST['regional'];
$hub_name = $_POST['hub_name'];

// menghapus data dari database
//mysqli_query($koneksi,"delete from t_fo where regional='$regional' ");
mysqli_query($koneksi,"update t_fo set kondisi='setuju' where node_id='$node_id'");

mysqli_query($koneksi,"insert t_coaxial set
                        node_id='$node_id',
                        node_des='$node_des',
                        regional='$regional',
                        hub_name='$hub_name' ");

// mengalihkan halaman kembali ke index.php
header("location:hub-tampil.php");
?>
