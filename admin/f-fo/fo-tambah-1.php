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
$kondisi = $_POST['kondisi'];
$tgl =date('d-m-Y');

mysqli_query($koneksi,"insert into t_fo values(
              '$tgl',
              '$node_id',
              '$node_des',
              '$regional',
              '$hub_name',
              '$rack',
              '$jarak_normal',
              '$pic',
              '$kondisi')");

//akhir syntax file upload file

header("location:fo-tampil.php");


?>
