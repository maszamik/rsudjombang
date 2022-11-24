<?php
include 'koneksi.php';

if (isset($_POST['kategori'])) {
	$post_tipe = $conn->real_escape_string($_POST['kategori']);
	$cek_layanan = $conn->query("SELECT * FROM poli WHERE kategori = '$post_tipe'");
	?>
	<option value="0">Pilih Salah Satu</option>
	<?php
	while ($data_layanan = $cek_layanan->fetch_assoc()) {
	?>
	<option value="<?php echo $data_layanan['nama_poli'];?>"><?php echo $data_layanan['nama_poli'];?></option>
	<?php
	} 
} else {
?>
<option value="0">Error.</option>
<?php
}