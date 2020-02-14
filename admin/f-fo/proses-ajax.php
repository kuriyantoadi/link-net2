

<?php
include '../koneksi.php';
$node_id = $_GET['node_id'];
$query = mysqli_query($koneksi, "select * from node where node_id='$node_id'");
$tampil = mysqli_fetch_array($query);
$data = array(
            'node_des'      =>  $tampil['node_des'],
            'regional'      =>  $tampil['regional'],
            'hub_name'      =>  $tampil['hub_name'],);
 echo json_encode($data);
?>
