<?php
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form

$node_id = $_POST['node_id'];
$node_des = $_POST['node_des'];
$regional = $_POST['regional'];
$hub_name = $_POST['hub_name'];
$rack = $_POST['rack'];
$jarak_normal = $_POST['jarak_normal'];
$pic = $_POST['pic'];


// update data ke database
//mysqli_query($koneksi,"update user set username='$username', password='$password', level='$level' where id='$id'");
mysqli_query($koneksi,"update t_fo set
              node_id='$node_id',
              node_des='$node_des',
              regional='$regional',
              hub_name='$hub_name',
              rack='$rack',
              jarak_normal='$jarak_normal',
              pic='$pic'
              where node_id='$node_id'"
            );


// mengalihkan halaman kembali ke index.php
header("location:fo-tampil.php");

?>
