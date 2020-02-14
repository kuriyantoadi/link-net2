<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<style type="text/css">
	body{
		font-family: sans-serif;
	}
	table{
		margin: 20px auto;
		border-collapse: collapse;
	}
	table td,
	table td{
		border: 1px solid #3c3c3c;
		padding: 3px 8px;

	}
	a{
		background: blue;
		color: #fff;
		padding: 8px 10px;
		text-decoration: none;
		border-radius: 2px;
	}
	</style>

	<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Laporan Pimipinan.xls");
	?>

  <table border="1">
    <tr>
      <td>No</td>
      <td>Node ID</td>
      <td>Node Deskription</td>
      <td>Hub Name</td>
      <td>Optical Light RX</td>
      <td>Optical Input Node</td>
      <td>Tanggal Approve</td>
      <td>Pukul Approve</td>
    </tr>
    <?php
    include '../koneksi.php';
    $no = 1;
    $data = mysqli_query($koneksi,"select * from pimpinan");
    while($d = mysqli_fetch_array($data)){
      ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $d['node_id']; ?></td>
        <td><?php echo $d['node_des']; ?></td>
        <td><?php echo $d['hub_name']; ?></td>
        <td><?php echo $d['optical_light_rx']; ?></td>
        <td><?php echo $d['optical_input_node']; ?></td>
        <td><?php echo $d['tgl_lap']; ?></td>
        <td><?php echo $d['jam_lap']; ?></td>
      </tr>
      <?php
    }
    ?>

    </table>
</body>
</html>
