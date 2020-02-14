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
	header("Content-Disposition: attachment; filename=Laporan Coaxial.xls");
	?>

	<table border="1">
		<tr>
			<th>No</th>
			<th>Node ID</th>
			<th>Node Deskription</th>
			<th>Regional</th>
			<th>Hub Name</th>
			<th>Optical Light RX</th>
			<th>Optical AC</th>
			<th>Optical DC</th>
			<th>Signal Input Low</th>
			<th>Signal Input High</th>
			<th>Signal Output Low</th>
			<th>Signal Output High</th>
			<th>Signal Output Rev</th>
			<th>Docsis DP</th>
			<th>Docsis UP</th>
			<th>Docsis DS</th>
			<th>Quality BER</th>
			<th>Quality MER</th>
			<th>Quality CN</th>
			<th>PIC</th>
			<th>Kondisi</th>

		</tr>
		<?php
		include '../koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from t_coaxial");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['node_id']; ?></td>
				<td><?php echo $d['node_des']; ?></td>
				<td><?php echo $d['regional']; ?></td>
				<td><?php echo $d['hub_name']; ?></td>
				<td><?php echo $d['optical_input_node']; ?></td>
				<td><?php echo $d['optical_ac']; ?></td>
				<td><?php echo $d['optical_dc']; ?></td>
				<td><?php echo $d['signal_input_low']; ?></td>
				<td><?php echo $d['signal_input_high']; ?></td>
				<td><?php echo $d['signal_output_low']; ?></td>
				<td><?php echo $d['signal_output_high']; ?></td>
				<td><?php echo $d['signal_output_rev']; ?></td>
				<td><?php echo $d['docsis_dp']; ?></td>
				<td><?php echo $d['docsis_up']; ?></td>
				<td><?php echo $d['docsis_ds']; ?></td>
				<td><?php echo $d['quality_ber']; ?></td>
				<td><?php echo $d['quality_mer']; ?></td>
				<td><?php echo $d['quality_cn']; ?></td>
				<td><?php echo $d['pic']; ?></td>
				<td><?php echo $d['kondisi']; ?></td>
				<td>
				</td>

			</tr>
			<?php
		}
		?>

		</table>
</body>
</html>
