<!-- Page Container START -->
<?php
    session_start();
    include '../koneksi.php';
    // cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['user_level_id']=="1"){
        $username = $_SESSION['username'];
    }

    $sql_pasien = "SELECT COUNT(nama_lengkap) FROM user_pasien";
    $sql_dokter = "SELECT COUNT(nama_dokter) FROM user_dokter";
    $sql_reservasi = "SELECT COUNT(reservasi_id) from reservasi where tgl_reservasi> now() - interval 1 week;";
    $sql_transaksi = "SELECT SUM(total_bayar) FROM transaksi WHERE status_bayar='Sudah Bayar'";

    
    $result_pasien = $conn -> query($sql_pasien);
    $result_dokter = $conn -> query($sql_dokter);
    $result_reservasi = $conn -> query($sql_reservasi);
    $result_transaksi = $conn -> query($sql_transaksi);

    $row_dokter = mysqli_fetch_array($result_dokter);
    $row_pasien = mysqli_fetch_array($result_pasien);
    $row_reservasi = mysqli_fetch_array($result_reservasi);
    $row_transaksi = mysqli_fetch_array($result_transaksi);

?>


<div class="page-container">
                

                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="media align-items-center">
                                        <div class="avatar avatar-icon avatar-lg avatar-blue">
                                            <i class="anticon anticon-dollar"></i>
                                        </div>
                                        <div class="m-l-15">
                                            <h2 class="m-b-0"><?php echo $row_pasien['COUNT(nama_lengkap)'];?></h2>
                                            <p class="m-b-0 text-muted">Jumlah Pasien</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="media align-items-center">
                                        <div class="avatar avatar-icon avatar-lg avatar-cyan">
                                            <i class="anticon anticon-line-chart"></i>
                                        </div>
                                        <div class="m-l-15">
                                            <h2 class="m-b-0"><?php echo $row_dokter['COUNT(nama_dokter)'];?></h2>
                                            <p class="m-b-0 text-muted">Jumlah Dokter</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="media align-items-center">
                                        <div class="avatar avatar-icon avatar-lg avatar-gold">
                                            <i class="anticon anticon-profile"></i>
                                        </div>
                                        <div class="m-l-15">
                                            <h2 class="m-b-0"><?php echo $row_reservasi['COUNT(reservasi_id)'];?></h2>
                                            <p class="m-b-0 text-muted">Reservasi Minggu Ini</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="media align-items-center">
                                        <div class="avatar avatar-icon avatar-lg avatar-purple">
                                            <i class="anticon anticon-user"></i>
                                        </div>
                                        <div class="m-l-15">
                                            <h2 class="m-b-0">Rp.<?php echo $row_transaksi['SUM(total_bayar)'];?></h2>
                                            <p class="m-b-0 text-muted">Total Pendapatan</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-lg-8">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5>Total Revenue</h5>
                                        <div>
                                            <div class="btn-group">
                                                <button class="btn btn-default active">
                                                    <span>Month</span>
                                                </button>
                                                <button class="btn btn-default">
                                                    <span>Year</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-t-50" style="height: 330px">
                                    <div class="chart-container">
                                        <!-- <canvas id="mycanvas"></canvas> -->
                                    </div>
                                        <script type="text/javascript" src="asset/js/jquery.min.js"></script>
                                        <script type="text/javascript" src="asset/js/Chart.min.js"></script>
                                        <script type="text/javascript" src="asset/js/linegraph.js"></script>
                                        <canvas class="chart" id="revenue-chart"></canvas>
                                        <canvas class="chart" id="line-chart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="m-b-0">Customers</h5>
                                    <div class="m-v-60 text-center" style="height: 200px">
                                        <canvas class="chart" id="customers-chart"></canvas>
                                    </div>
                                    <div class="row border-top p-t-25">
                                        <div class="col-4">
                                            <div class="d-flex justify-content-center">
                                                <div class="media align-items-center">
                                                    <span class="badge badge-success badge-dot m-r-10"></span>
                                                    <div class="m-l-5">
                                                        <h4 class="m-b-0">350</h4>
                                                        <p class="m-b-0 muted">New</p>
                                                    </div>    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="d-flex justify-content-center">
                                                <div class="media align-items-center">
                                                    <span class="badge badge-secondary badge-dot m-r-10"></span>
                                                    <div class="m-l-5">
                                                        <h4 class="m-b-0">450</h4>
                                                        <p class="m-b-0 muted">Returning</p>
                                                    </div>    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="d-flex justify-content-center">
                                                <div class="media align-items-center">
                                                    <span class="badge badge-warning badge-dot m-r-10"></span>
                                                    <div class="m-l-5">
                                                        <h4 class="m-b-0">100</h4>
                                                        <p class="m-b-0 muted">Others</p>
                                                    </div>    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Content Wrapper END -->