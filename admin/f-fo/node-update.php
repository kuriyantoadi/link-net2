<?php
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$regional = $_POST['regional'];
$hub_name = $_POST['hub_name'];
$node_id = $_POST['node_id'];
$node_des = $_POST['node_des'];
$titik_ko = $_POST['titik_ko'];

// update data ke database
//mysqli_query($koneksi,"update user set username='$username', password='$password', level='$level' where id='$id'");
mysqli_query($koneksi,"update node set hub_name='$hub_name', node_id='$node_id', node_des='$node_des', titik_ko='$titik_ko' where regional='$regional'");


// mengalihkan halaman kembali ke index.php
header("location:node-tampil.php");

?>
