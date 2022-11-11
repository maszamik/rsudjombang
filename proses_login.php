<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if($data['user_level_id']=="1"){

		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['user_level_id'] = "1";
		// alihkan ke halaman dashboard admin
		header("location:admin.php");

	// cek jika user login sebagai member
	}else if($data['user_level_id']=="2"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['user_level_id'] = "2";
		// alihkan ke halaman dashboard member
		header("location:dokter.php");
	}else{

		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}

	
}else{
	header("location:index.php?pesan=gagal");
}



?>