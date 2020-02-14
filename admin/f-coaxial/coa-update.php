<?php
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$node_id = $_POST['node_id'];
session_start();


$limit = 3 * 1024 * 1024; //10MB. Bisa diubah2

if(isset($_FILES['upload'])){

	//karena ada multiple, jadi dilakukan pengecekan foreach
	$jumlahFile = count($_FILES['upload']['name']);
	for($i=0; $i<$jumlahFile; $i++){
		$namafile = $_FILES['upload']['name'][$i];
		$tmp = $_FILES['upload']['tmp_name'][$i];
		$type = $_FILES['upload']['type'][$i];
		$error = $_FILES['upload']['error'][$i];
		$size = $_FILES['upload']['size'][$i];

//		$ekstensi_diperbolehkan	= array('pdf');
		$x = explode('.', $namafile);
		$ekstensi = strtolower(end($x));

	//	if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){


		//lakukan pengecekan disini
		if($size > $limit){
			$_SESSION['error'] = 'Ukuran file teralu besar, Maximal file 3 MB';
			echo "Ukuran file teralu besar, Maximal file 3 MB";
			//header("fo-input.php");
			exit();
		}

		if($error > 0){
			$_SESSION['error'] = 'Upload gagal';
			echo "Maaf File yg anda upload gagal";

			//("fo-input.php");
			exit();
		}


		//kalau pengecekan sudah selesai, langsung proses
		move_uploaded_file($tmp, 'upload/'.$node_id.'-'.$namafile);
//	}else{
//		$_SESSION['error'] = 'Maaf file upload harus PDF';
//		echo "Maaf file upload harus PDF";
		//echo '<META HTTP-EQUIV="Refresh" Content="0; URL=fo-input.php">';
//		exit;
		//header("fo-input.php");
		//exit();
//	}

	}
	//echo "upload berhasil";
  //akhir syntax file upload file
	echo $namafile;
	echo $namafile;

$node_id = $_POST['node_id'];
$node_des = $_POST['node_des'];
$regional = $_POST['regional'];
$hub_name = $_POST['hub_name'];
$optical_input_node = $_POST['optical_input_node'];
$optical_ac = $_POST['optical_ac'];
$optical_dc = $_POST['optical_dc'];
$signal_input_low = $_POST['signal_input_low'];
$signal_input_high = $_POST['signal_input_high'];
$signal_output_high = $_POST['signal_output_high'];
$signal_output_low = $_POST['signal_output_low'];
$signal_output_rev = $_POST['signal_output_rev'];
$docsis_dp = $_POST['docsis_dp'];
$docsis_up = $_POST['docsis_up'];
$docsis_ds = $_POST['docsis_ds'];
$quality_mer = $_POST['quality_mer'];
$quality_ber = $_POST['quality_ber'];
$quality_cn = $_POST['quality_cn'];
$pic = $_POST['pic'];

// update data ke database
//mysqli_query($koneksi,"update user set username='$username', password='$password', level='$level' where id='$id'");

mysqli_query($koneksi,"update t_coaxial set
                      optical_input_node='$optical_input_node',
                      optical_ac='$optical_ac',
                      optical_dc='$optical_dc',
                      signal_input_low='$signal_input_low',
                      signal_input_high='$signal_input_high',
                      signal_output_low='$signal_output_low',
                      signal_output_high='$signal_output_high',
                      signal_output_rev='$signal_output_rev',
                      docsis_dp='$docsis_up',
                      docsis_up='$docsis_up',
                      docsis_ds='$docsis_ds',
                      quality_ber='$quality_ber',
                      quality_mer='$quality_mer',
                      quality_cn='$quality_cn',
                      pic='$pic',
                      kondisi='Menunggu Konfirmasi'
                      where node_id='$node_id'");

mysqli_query($koneksi,"insert into t_hub
              (node_id, node_des, regional, hub_name)
              values(
              '$node_id',
              '$node_des',
              '$regional',
              '$hub_name')");


//mysqli_query($koneksi,"update t_coaxial set optical_rx='$optical_rx' where node_id='$node_id'");

// mengalihkan halaman kembali ke index.php
header("location:coa-tampil.php");

}
?>
