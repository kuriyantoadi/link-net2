<?php
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$node_id = $_POST['node_id'];
$tgl_lap =date('d-m-Y');
date_default_timezone_set('Asia/Jakarta');
$jam_lap=date('H:i:s'); // 19-01-2017 23:10:15

mysqli_query($koneksi,"update pimpinan set
                      tgl_lap='$tgl_lap',
                      jam_lap='$jam_lap',
                      kondisi='Approve'
                      where node_id='$node_id'");

// mengalihkan halaman kembali ke index.php
header("location:pimpinan-tampil.php");

?>
