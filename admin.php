<!DOCTYPE html>
<html>
<head>
	<title>Halaman admin</title>
</head>
<body>
	<?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['user_level_id']==""){
		header("location:index.php?pesan=gagal");
	}

	?>
	<h1>Halaman Admin</h1>

	<p>Halo <b><?php echo $_SESSION['username']; ?></p>
	<a href="loqout.php">LOGOUT</a>

	<br/>
	<br/>

</body>
</html>