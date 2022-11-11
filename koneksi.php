<?php 
$koneksi = mysqli_connect("localhost","kamunaen_1","kamunaen_1234567","kamunaen_1");
 
// Check connection
if (mysqli_connect_error()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>