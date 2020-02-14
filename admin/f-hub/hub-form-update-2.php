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

echo $node_id, $node_des, $regional, $hub_name;
echo $optical_light_rx, $optical_light_tx, $receiver_no, $receiver_loss;
echo $transmitter_no, $transmitter_persen,

mysqli_query($koneksi,"update t_hub set
                      node_id='$node_id',
                      node_des='$node_des',
                      regional='$regional',
                      hub_name='$hub_name',
                      optical_light_tx='$optical_light_tx',
                      optical_light_rx='$optical_light_rx',
                      receiver_no='$receiver_no',
                      receiver_loss='$receiver_loss,
                      transmitter_no='$transmitter_no',
                      transmitter_persen='$transmitter_persen',
                      signal_trans_low='$signal_trans_low',
                      signal_trans_high='$signal_trans_high',
                      signal_trans_dl='$signal_trans_dl',
                      cmts_no='$cmts_no',
                      cmts_ds='$cmts_ds',
                      cmts_us='$cmts_us'
                      pic='$pic'
                      where node_id='$node_id'");

                      mysqli_query($koneksi,"update t_hub set
                                            node_id='$node_id',
                                            node_des='$node_des',
                                            regional='$regional',
                                            hub_name='$hub_name',
                                            optical_light_tx='kura2'
                                            where node_id='$node_id' ");


// mengalihkan halaman kembali ke index.php
//header("location:coa-tampil.php");

?>
