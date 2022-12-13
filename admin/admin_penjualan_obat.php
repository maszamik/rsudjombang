<?php
    session_start();
    include '../koneksi.php';
    // cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['user_level_id']=="1"){
        $username = $_SESSION['username'];
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>RSUD JOMBANG - Homepage Telemedicine</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets/img/logo/RSUD2.png">

    <!-- page css -->
    <link href="../assets/vendors/datatables/dataTables.bootstrap.min.css" rel="stylesheet">

    <!-- Core css -->
    <link href="../assets/css/app.min.css" rel="stylesheet">

</head>

<body>
    <div class="app">
        <div class="layout">
            <?php require('1_header.php'); ?>
			<?php require('3_admin_sidebar.php'); ?>
            <!-- Page Container START -->
            <div class="page-container">
                

                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="page-header">
                        <h2 class="header-title">Data Table</h2>
                        <div class="header-sub-title">
                            <nav class="breadcrumb breadcrumb-dash">
                                <a href="#" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Home</a>
                                <a class="breadcrumb-item" href="#">Report</a>
                                <span class="breadcrumb-item active">Penjualan Obat</span>
                            </nav>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="overlay">
                            </div>
                            <h4>Penjualan Obat</h4>
                            <div class="m-t-25">
                                <table id="data-table" class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>ID Reservasi</th>
                                            <th>Nama Obat</th>
                                            <th>Nama Pasien</th>
                                            <th>Jumlah Obat</th>
                                            <th>Total Pembayaran</th>
                                            <th>Status Bayar</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            include('../koneksi.php');
                                            $sql = "SELECT * FROM resep_obat AS r
                                                    LEFT JOIN reservasi AS res ON r.reservasi_id = res.reservasi_id
                                                    LEFT JOIN obat AS o ON r.obat_id = o.obat_id
                                                    LEFT JOIN transaksi AS t ON r.transaksi_id = t.transaksi_id
                                                    LEFT JOIN user as u ON r.user_id = u.user_id";
                                            $num = 0;
                                            $result = $conn->query($sql);
                                            
                                            // if (isset($_POST['delete'])) {

                                            //     echo $did = $_POST['reservasi_id'];
                                            //     $query = $link->prepare( "DELETE FROM reservasi WHERE reservasi_id=?" );
                                            //     $query->bind_param( "s", $did );
                                            //     $query->execute();
                                            // }

                                            if ($result->num_rows > 0) {
                                            // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                                    $num = $num + 1;
                                                    echo "<tr><td>" .$num.
                                                        "</td><td>" .$row["reservasi_id"].
                                                        "</td><td>". $row["nama_obat"] .
                                                        "</td><td>". $row["nama_lengkap"].
                                                        "</td><td>" . $row["qty_beli"] .
                                                        "</td><td>". $row["total_bayar"].
                                                        "</td><td>" . $row["status_bayar"] .
                                                        "</td><td>";
                                                    echo "<button class='btn btn-icon btn-primary'>
                                                            <i class='anticon anticon-plus'></i></button>";
                                                    echo "<a href='admin_edit.php?id=".$row['reservasi_id']."'>
                                                            <button class='btn btn-icon btn-success'>
                                                            <i class='anticon anticon-edit'></i></button></a>";
                                                    echo "<a href='delete.php?id=".$row['reservasi_id']."'>
                                                            <button class='btn btn-icon btn-danger'>
                                                            <i class='anticon anticon-delete'></i></button></a>
                                                            </td><tr>";
                                                }
                                            } else { echo "0 results"; }
                                            $conn->close();
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Content Wrapper END -->
                <?php require('2_footer.php'); ?>
            </div>
            <!-- Page Container END -->
        </div>
    </div>

    
    <!-- Core Vendors JS -->
    <script src="../assets/js/vendors.min.js"></script>

    <!-- page js -->
    <script src="../assets/vendors/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/vendors/datatables/dataTables.bootstrap.min.js"></script>
    <script src="../assets/js/pages/datatables.js"></script>

    <!-- Core JS -->
    <script src="../assets/js/app.min.js"></script>

</body>

</html>