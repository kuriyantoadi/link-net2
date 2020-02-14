<?php
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$node_id = $_POST['node_id'];
$node_des = $_POST['node_des'];
$regional = $_POST['regional'];
$hub_name = $_POST['hub_name'];
$optical_light_tx = $_POST['optical_light_tx'];
$optical_light_rx = $_POST['optical_light_rx'];
$receiver_no = $_POST['receiver_no'];
$receiver_loss = $_POST['receiver_loss'];
$transmitter_no = $_POST['transmitter_no'];
$transmitter_persen = $_POST['transmitter_persen'];
$signal_trans_low= $_POST['signal_trans_low'];
$signal_trans_high = $_POST['signal_trans_high'];
$signal_trans_dl = $_POST['signal_trans_dl'];
$cmts_no = $_POST['cmts_no'];
$cmts_ds = $_POST['cmts_ds'];
$cmts_us = $_POST['cmts_us'];
$pic = $_POST['pic'];

mysqli_query($koneksi,"update t_hub set
                      node_id='$node_id',
                      node_des='$node_des',
                      regional='$regional',
                      hub_name='$hub_name',
                      optical_light_tx='$optical_light_tx',
                      optical_light_rx='$optical_light_rx',
                      receiver_no='$receiver_no',
                      receiver_loss='$receiver_loss',
                      transmitter_no='$transmitter_no',
                      transmitter_persen='$transmitter_persen',
                      signal_trans_low='$signal_trans_low',
                      signal_trans_high='$signal_trans_high',
                      signal_trans_dl='$signal_trans_dl',
                      cmts_no='$cmts_no',
                      cmts_ds='$cmts_ds',
                      cmts_us='$cmts_us',
                      pic='$pic',
                      kondisi='Sudah di Input'
                      where node_id='$node_id'");

//$data = mysqli_query($koneksi,"select * from t_coaxial");
//while($d = mysqli_fetch_array($data)){
//      $optical_input_node=($d['optical_input_node']);
//}

//tampilkan data coaxial
$d_coaxial = mysqli_query($koneksi,"select * from t_coaxial where node_id='$node_id'");
while($d = mysqli_fetch_array($d_coaxial)){
      $optical_input_node=($d['optical_input_node']);
      $optical_ac=($d['optical_ac']);
      $optical_dc=($d['optical_dc']);
      $signal_input_low=($d['signal_input_low']);
      $signal_input_high=($d['signal_input_high']);
      $signal_output_low=($d['signal_output_low']);
      $signal_output_high=($d['signal_output_high']);
      $signal_output_rev=($d['signal_output_rev']);
      $docsis_dp=($d['docsis_dp']);
      $docsis_up=($d['docsis_up']);
      $docsis_ds=($d['docsis_ds']);
      $quality_ber=($d['quality_ber']);
      $quality_mer=($d['quality_mer']);
      $quality_cn=($d['quality_cn']);
    //  $pic=($d['pic']);

}


//tampilkan data hub
$d_hub = mysqli_query($koneksi,"select * from t_hub where node_id='$node_id'");
while($d = mysqli_fetch_array($d_hub)){
      $optical_light_tx=($d['optical_light_tx']);
      $optical_light_rx=($d['optical_light_rx']);
      $receiver_no=($d['receiver_no']);
      $receiver_loss=($d['receiver_loss']);
      $transmitter_no=($d['transmitter_no']);
      $transmitter_persen=($d['transmitter_persen']);
      $signal_trans_low=($d['signal_trans_low']);
      $signal_trans_high=($d['signal_trans_high']);
      $signal_trans_dl=($d['signal_trans_dl']);
      $cmts_no=($d['cmts_no']);
      $cmts_ds=($d['cmts_ds']);
      $cmts_us=($d['cmts_us']);
    //  $pic=($d['pic']);

}

//tampilkan data fo
$d_fo = mysqli_query($koneksi,"select * from t_fo where node_id='$node_id'");
while($d = mysqli_fetch_array($d_fo)){
      $tgl_daftar=($d['tgl']);
      $rack=($d['rack']);
      $jarak_normal=($d['jarak_normal']);
    //  $pic=($d['pic']);

}

mysqli_query($koneksi,"insert into pimpinan
          values(
            '$node_id',
            '$node_des',
            '$regional',
            '$hub_name',
            '$rack',
            '$jarak_normal',
            '$pic',
            '$optical_light_tx',
            '$optical_light_rx',
            '$receiver_no',
            '$receiver_loss',
            '$transmitter_no',
            '$transmitter_persen',
            '$signal_trans_low',
            '$signal_trans_high',
            '$signal_trans_dl',
            '$cmts_no',
            '$cmts_ds',
            '$cmts_us',
            '$optical_input_node',
            '$optical_ac',
            '$optical_dc',
            '$signal_input_low',
            '$signal_input_high',
            '$signal_output_low',
            '$signal_output_high',
            '$signal_output_rev',
            '$docsis_dp',
            '$docsis_up',
            '$docsis_ds',
            '$quality_ber',
            '$quality_mer',
            '$quality_cn',
            '',
            '',
            ''
              )");

// mengalihkan halaman kembali ke index.php
header("location:hub-form-tampil.php");

?>
