<?php
	include('../koneksi.php');
 
	$username=$_POST['username'];
    $password=$_POST['password'];
	$email=$_POST['email'];
	$user_id=$_POST['user_id'];
    $nama_dokter=$_POST['nama_dokter'];
	$nip=$_POST['nip'];
    $status=$_POST['status'];
	$user_level_id='2';

 
	mysqli_query($conn,"insert into `user` (username,password,email,nama_lengkap,user_level_id,status)
                    values ('$username','$password','$email','$nama_dokter','$user_level_id','1')"
				);
	
	mysqli_query($conn, "INSERT INTO user_dokter(user_id, nama_dokter, nip, status)
					VALUES((SELECT user_id FROM user WHERE username = '$username'), '$nama_dokter', '$nip', '$status')"
					);

	header('location:admin_table_dokter.php');
 
?>