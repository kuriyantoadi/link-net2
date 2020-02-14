<?php
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$hub_name = $_POST['hub_name'];
$node_id = $_POST['node_id'];
$node_des = $_POST['node_des'];
$optical_rx = $_POST['optical_rx'];
$optical_dc = $_POST['optical_dc'];
echo "hub_name";
// menginput data ke database
mysqli_query($koneksi,"insert into t_lap values('$hub_name','$node_id','$node_des','$optical_rx','$optical_dc')");
//mysqli_query($koneksi,"insert into user values('','$username','$password','$level')");


// mengalihkan halaman kembali ke index.php
//header("location:hub-pimpinan-tampil.php");

?>
