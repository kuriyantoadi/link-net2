<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = md5($_POST['password']);


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if($data['level']=="ad"){

		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "login";
		// alihkan ke halaman dashboard admin
		header("location:f-admin/index.php");

	// cek jika user login sebagai Teknisi Fiber Optik
	}else if($data['level']=="fo"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "login";
		// alihkan ke halaman dashboard pegawai
		header("location:f-fo/index.php");

	// cek jika user login sebagai Teknisi Coaxial
}else if($data['level']=="co"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "login";
		// alihkan ke halaman dashboard Teknisi Coaxial
		header("location:f-coaxial/index.php");

}else if($data['level']=="hu"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "login";
		// alihkan ke halaman dashboard teknisi Hub
		header("location:f-hub/index.php");

	}else if($data['level']=="pi"){
			// buat session login dan username
			$_SESSION['username'] = $username;
			$_SESSION['status'] = "login";
			// alihkan ke halaman dashboard pimpinan
			header("location:f-pimpinan/index.php");

	}else{

		// alihkan ke halaman login kembali
		header("location:login.php?pesan=gagal");
	}
}else{
	header("location:login.php?pesan=gagal");
}

?>
