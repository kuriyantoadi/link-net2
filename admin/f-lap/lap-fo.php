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
	header("Content-Disposition: attachment; filename=Laporan FiberOptik.xls");
	?>

	<table border="1">
		<tr>
			<th>No</th>
			<th>Tanggal Input</th>
			<th>Node ID</th>
			<th>Node Deskription</th>
			<th>Regional</th>
			<th>Hub Name</th>
			<th>Rack</th>
			<th>Jarak Normal</th>
			<th>PIC</th>
			<th>Kondisi</th>

		</tr>
		<?php
		include '../koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from t_fo");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['tgl']; ?></td>
				<td><?php echo $d['node_id']; ?></td>
				<td><?php echo $d['node_des']; ?></td>
				<td><?php echo $d['regional']; ?></td>
				<td><?php echo $d['hub_name']; ?></td>
				<td><?php echo $d['rack']; ?></td>
				<td><?php echo $d['jarak_normal']; ?></td>
				<td><?php echo $d['pic']; ?></td>
				<td><?php echo $d['kondisi']; ?></td>
			</tr>
			<?php
		}
		?>

		</table>
</body>
</html>