<?php

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

	//	$ekstensi_diperbolehkan	= array('');
		$x = explode('.', $namafile);
		$ekstensi = strtolower(end($x));

		//if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){


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
	//	$_SESSION['error'] = 'Maaf file upload harus PDF';
	//	echo "Maaf file upload harus PDF1";
		//echo '<META HTTP-EQUIV="Refresh" Content="0; URL=fo-input.php">';
	//	exit;
		//header("fo-input.php");
		//exit();
//	}

	}
	//echo "upload berhasil";
  //akhir syntax file upload file
	echo $namafile;
	echo $namafile;



      include '../koneksi.php';

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





header("location:fo-tampil.php");
}


//kemungkinan nyampe kesini cuma kalau user ga upload apa2
?>
