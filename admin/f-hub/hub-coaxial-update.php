<?php
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$node_id = $_POST['node_id'];
$node_des = $_POST['node_des'];
$regional = $_POST['regional'];
$hub_name = $_POST['hub_name'];

// update data ke database
//mysqli_query($koneksi,"update user set username='$username', password='$password', level='$level' where id='$id'");
mysqli_query($koneksi, "update t_coaxial set kondisi='Sudah dikonfirmasi' where node_id='$node_id'");

mysqli_query($koneksi, "insert into t_hub
          values(
              '$node_id',
              '$node_des',
              '$hub_name',
              '$regional',
              '',
              '',
              '',
              '',
              '',
              '',
              '',
              '',
              '',
              '',
              '',
              '',
              ''
              )");

// mengalihkan halaman kembali ke index.php
header("location:hub-coaxial-tampil.php");
