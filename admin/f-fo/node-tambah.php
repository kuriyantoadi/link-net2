<?php
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$regional = $_POST['regional'];
$hub_name = $_POST['hub_name'];
$node_id = $_POST['node_id'];
$node_des = $_POST['node_des'];
$titik_ko = $_POST['titik_ko'];

// menginput data ke database
mysqli_query($koneksi,"insert into node values('$regional','$hub_name','$node_id','$node_des','$titik_ko')");
//mysqli_query($koneksi,"insert into user values('','$username','$password','$level')");


// mengalihkan halaman kembali ke index.php
header("location:node-tampil.php");

?>
