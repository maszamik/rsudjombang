<?php
include 'koneksi.php';

if (isset($_POST['nama_poli'])) {
    $post_tipe = $conn->real_escape_string($_POST['kategori']);
	$post_kategori = $conn->real_escape_string($_POST['nama_poli']);
	$cek_layanan = $conn->query("SELECT * FROM user_dokter WHERE nama_poli = '$post_kategori' AND kategori ='$post_tipe' AND status = 'Aktif' ORDER BY harga ASC");
	if (mysqli_num_rows($cek_layanan) != 0) {
	?>

                    <div class="table-responsive">
                        <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
                            <thead>
                                <tr>
                                    <th>NIP</th>
                                    <th>Poli</th>
                                    <th>NAMA DOKTER</th>
                                    <th>HARGA PER 30Menit</th>
                                    <th>STATUS</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            while ($data_layanan = mysqli_fetch_assoc($cek_layanan)) {
                            if($data_layanan['status'] == "Aktif") {
                                $label = "success";
                            } else if($data_layanan['status'] == "Tidak Aktif") {
                                $label = "danger";
                            }
                            ?>
                                <tr>
                                    <th scope="row"><?php echo $data_layanan['nip']; ?></th>
                                    <td><?php echo $data_layanan['nama_poli']; ?></td>
                                    <td><?php echo $data_layanan['nama_dokter']; ?></td>
                                    <td>Rp <?php echo number_format($data_layanan['harga'],0,',','.'); ?></td>
                                    <td><label class="btn btn-sm btn-<?php echo $label; ?>"><?php echo $data_layanan['status']; ?></label></td>
                                </tr>
                            <?php
                            } 
                            ?>
                            </tbody>
                        </table>
                    </div>
<?php
} else {
?>
<div class="text-center">
<div class="alert alert-primary">Maaf, Dokter Belum Tersedia</div>
</div>
<?php
}
}