<?php

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

		$ekstensi_diperbolehkan	= array('pdf');
		$x = explode('.', $namafile);
		$ekstensi = strtolower(end($x));

		if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){


		//lakukan pengecekan disini
		if($size > $limit){
			$_SESSION['error'] = 'Ukuran file teralu besar, Maximal file 3 MB';
			echo "error1";
			//header("fo-input.php");
			exit();
		}

		if($error > 0){
			$_SESSION['error'] = 'Upload gagal';
			echo "error2";

			//("fo-input.php");
			exit();
		}


		//kalau pengecekan sudah selesai, langsung proses
		move_uploaded_file($tmp, 'upload/'.$namafile);
	}else{
		$_SESSION['error'] = 'Maaf file upload harus PDF';
		echo "error3";

		//header("fo-input.php");
		exit();
	}

	}
	echo $namafile;
	echo "upload berhasil";

	//exit();

}

//kemungkinan nyampe kesini cuma kalau user ga upload apa2
