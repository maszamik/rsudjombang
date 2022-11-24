    <?php 
    session_start();
    include 'koneksi.php';
    ?>

    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>RSUD JOMBANG -Homepage Telemedicine</title>


		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/checkout/">

		<!-- Bootstrap core CSS -->
		<link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

		<!-- Mandatory js duitku bundle  -->
		<!-- Switch if using sandbox / production  -->
		<script src="https://app-sandbox.duitku.com/lib/js/duitku.js"></script>
		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
		<script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/popper.min.js"></script>
		<script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js"></script>
		<script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/holder.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

        <!-- Favicon -->
        <link rel="shortcut icon" href="assets/img/logo/RSUD2.png">

        <!-- page css -->

        <!-- Core css -->
        <link href="assets/css/app.min.css" rel="stylesheet">

    </head>

    <body>
        <div class="app">
            <div class="layout">
                <!-- Header START -->
                <div class="header">
                    <div class="logo logo-dark">
                        <a href="index.html">
                            <img src="assets/img/logo/" alt="Logo">
                            <img class="logo-fold" src="assets/img/logo/" alt="Logo">
                        </a>
                    </div>
                    <div class="logo logo-white">
                        <a href="index.html">
                            <img src="assets/img/logo/" alt="Logo">
                            <img class="logo-fold" src="assets/img/logo/" alt="Logo">
                        </a>
                    </div>
                    <div class="nav-wrap">
                        <ul class="nav-left">
                            <li class="desktop-toggle">
                                <a href="javascript:void(0);">
                                    <i class="anticon"></i>
                                </a>
                            </li>
                            <li class="mobile-toggle">
                                <a href="javascript:void(0);">
                                    <i class="anticon"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" data-toggle="modal" data-target="#search-drawer">
                                    <i class="anticon anticon-search"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="dropdown dropdown-animated scale-left">
                                <a href="javascript:void(0);" data-toggle="dropdown">
                                    <i class="anticon anticon-bell notification-badge"></i>
                                </a>
                                <div class="dropdown-menu pop-notification">
                                    <div class="p-v-15 p-h-25 border-bottom d-flex justify-content-between align-items-center">
                                        <p class="text-dark font-weight-semibold m-b-0">
                                            <i class="anticon anticon-bell"></i>
                                            <span class="m-l-10">Notification</span>
                                        </p>
                                        <a class="btn-sm btn-default btn" href="javascript:void(0);">
                                            <small>View All</small>
                                        </a>
                                    </div>
                                    <div class="relative">
                                        <div class="overflow-y-auto relative scrollable" style="max-height: 300px">
                                            <a href="javascript:void(0);" class="dropdown-item d-block p-15 border-bottom">
                                                <div class="d-flex">
                                                    <div class="avatar avatar-blue avatar-icon">
                                                        <i class="anticon anticon-mail"></i>
                                                    </div>
                                                    <div class="m-l-15">
                                                        <p class="m-b-0 text-dark">You received a new message</p>
                                                        <p class="m-b-0"><small>8 min ago</small></p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item d-block p-15 border-bottom">
                                                <div class="d-flex">
                                                    <div class="avatar avatar-cyan avatar-icon">
                                                        <i class="anticon anticon-user-add"></i>
                                                    </div>
                                                    <div class="m-l-15">
                                                        <p class="m-b-0 text-dark">New user registered</p>
                                                        <p class="m-b-0"><small>7 hours ago</small></p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item d-block p-15 border-bottom">
                                                <div class="d-flex">
                                                    <div class="avatar avatar-red avatar-icon">
                                                        <i class="anticon anticon-user-add"></i>
                                                    </div>
                                                    <div class="m-l-15">
                                                        <p class="m-b-0 text-dark">System Alert</p>
                                                        <p class="m-b-0"><small>8 hours ago</small></p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item d-block p-15 ">
                                                <div class="d-flex">
                                                    <div class="avatar avatar-gold avatar-icon">
                                                        <i class="anticon anticon-user-add"></i>
                                                    </div>
                                                    <div class="m-l-15">
                                                        <p class="m-b-0 text-dark">You have a new update</p>
                                                        <p class="m-b-0"><small>2 days ago</small></p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown dropdown-animated scale-left">
                                <div class="pointer" data-toggle="dropdown">
                                    <div class="avatar avatar-image  m-h-10 m-r-15">
                                        <img src="assets/images/avatars/thumb-3.jpg"  alt="">
                                    </div>
                                </div>
                                <div class="p-b-15 p-t-20 dropdown-menu pop-profile">
                                    <div class="p-h-20 p-b-15 m-b-10 border-bottom">
                                        <div class="d-flex m-r-50">
                                            <div class="avatar avatar-lg avatar-image">
                                                <img src="assets/images/avatars/thumb-3.jpg" alt="">
                                            </div>
                                            <div class="m-l-10">
                                                <p class="m-b-0 text-dark font-weight-semibold"><?php echo $username; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="profile.php" class="dropdown-item d-block p-h-15 p-v-10">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>
                                                <i class="anticon opacity-04 font-size-16 anticon-user"></i>
                                                <span class="m-l-10">Edit Profile</span>
                                            </div>
                                            <i class="anticon font-size-10 anticon-right"></i>
                                        </div>
                                    </a>
                                    <a href="setting.php" class="dropdown-item d-block p-h-15 p-v-10">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>
                                                <i class="anticon opacity-04 font-size-16 anticon-lock"></i>
                                                <span class="m-l-10">Ganti Password</span>
                                            </div>
                                            <i class="anticon font-size-10 anticon-right"></i>
                                        </div>
                                    </a>
                                    <a href="loqout.php" class="dropdown-item d-block p-h-15 p-v-10">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>
                                                <i class="anticon opacity-04 font-size-16 anticon-logout"></i>
                                                <span class="m-l-10">Logout</span>
                                            </div>
                                            <i class="anticon font-size-10 anticon-right"></i>
                                        </div>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>    
                <!-- Header END -->

                <!-- Side Nav START -->
                <div class="side-nav">
                    <div class="side-nav-inner">
                        <ul class="side-nav-menu scrollable">
                            <li class="nav-item dropdown open">
                                <a class="dropdown-toggle" href="javascript:void(0);">
                                    <span class="icon-holder">
                                        <i class="anticon anticon-dashboard"></i>
                                    </span>
                                    <span class="title">Dashboard</span>
                                    <span class="arrow">
                                        <i class="arrow-icon"></i>
                                    </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="active">
                                        <a href="/../auth/home.php">Default</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="dropdown-toggle" href="javascript:void(0);">
                                    <span class="icon-holder">
                                        <i class="anticon anticon-appstore"></i>
                                    </span>
                                    <span class="title">Reservasi</span>
                                    <span class="arrow">
                                        <i class="arrow-icon"></i>
                                    </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="app-chat.html">Konsultasi</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="dropdown-toggle" href="javascript:void(0);">
                                    <span class="icon-holder">
                                        <i class="anticon anticon-build"></i>
                                    </span>
                                    <span class="title">Informasi</span>
                                    <span class="arrow">
                                        <i class="arrow-icon"></i>
                                    </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="avatar.html">Layanan</a>
                                    </li>
                                    <li>
                                        <a href="alert.html">Cara Penggunaan</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="dropdown-toggle" href="javascript:void(0);">
                                    <span class="icon-holder">
                                        <i class="anticon anticon-hdd"></i>
                                    </span>
                                    <span class="title">E-RESEP</span>
                                    <span class="arrow">
                                        <i class="arrow-icon"></i>
                                    </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="accordion.html">E-Resep</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="dropdown-toggle" href="javascript:void(0);">
                                    <span class="icon-holder">
                                        <i class="anticon anticon-form"></i>
                                    </span>
                                    <span class="title">Riwayat</span>
                                    <span class="arrow">
                                        <i class="arrow-icon"></i>
                                    </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="form-elements.html">Konsultasi</a>
                                    </li>
                                    <li>
                                        <a href="form-layouts.html">Transaksi</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Side Nav END -->
                
    <!-- Page Container START -->
    <div class="page-container">

                    <!-- Content Wrapper START -->
                    <div class="main-content">
                        <div class="page-header no-gutters has-tab">
                            <h2 class="font-weight-normal">Reservasi</h2>
                            <p class="font-weight-normal"> Silahkan Memilih Poli, Jadwal dan durasi beserta platform konsultasi</p>
                            <ul class="nav nav-tabs" >
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tab-account">Reservasi</a>
                                </li>
                            </ul>
                        </div>
                        <div class="container">
                            <div class="tab-content m-t-15">
                                <div class="tab-pane fade show active" name="tab-account" >
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Reservasi Konsultasi</h4>
                                        </div>   
                                        <div class="card-body">
                                            <form method="POST">
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label class="font-weight-semibold" for="jenis_kelamin">Pilih Poli</label>
                                                        <select name="poli" id="poli" class="form-control">
                                                            <option selected="true" disabled="disabled">Pilih</option>    
                                                            <?php
                                                                $query = mysqli_query($conn, "SELECT * FROM poli");
                                                                while ($data = mysqli_fetch_array($query)) {
                                                                    echo "<option value='$data[poli_id]'>$data[nama_poli]</option>";
                                                                }
                                                            ?>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="font-weight-semibold" for="jenis_kelamin">Pilih Durasi</label>
                                                        <select name="durasi" class="form-control">
                                                            <option selected="true" disabled="disabled">Pilih</option>
                                                            <option value="1">30 Menit</option>
                                                            <option value="2">60 Menit</option>
                                                        </select>
                                                        
                                                        <div class="mb-4">
                                                        <label>Email</label>
                                                        <input required id="email" value="customer@duitku.com" type="text" class="form-control" placeholder="customer@duitku.com">                
                                                        </div>

                                                        <div class="mb-4">
                                                        <label>Phone Number</label>
                                                        <input required id="phoneNumber" value="08123456789" type="number" class="form-control" placeholder="08123456789">                
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label class="font-weight-semibold" for="tgl_lahir">Tanggal Konsultasi</label>
                                                        <input type="date"  name="tanggal" class="form-control" placeholder="Tanggal Lahir">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="font-weight-semibold" for="jenis_kelamin">Pilih Waktu</label>
                                                        <input type="time"  name="waktu" class="form-control" placeholder="Waktu">
                                                    </div>
                                                </div>
                                                <div class="dokter_wrap" id="dokter_wrap" style="display:none">
                                                <div class="text-center">
                                                    <h3> Pilih Dokter </h3>
                                                </div>
                                        <div class="row pt-10">
                                            <?php
                                            $i = 1;
                                            $query = mysqli_query($conn, "SELECT * FROM user_dokter");
                                            while ($data = mysqli_fetch_array($query)) {
                                                ?>
                                            <div class="col-lg-4" id="dokter_wrap_content<?= $i ?>" style="display:none">
                                                <div class="card text-center" style="width: 18rem;">
                                                    <img style="width: 280px;height: 400px;object-fit: cover;" id="foto-dokter<?= $i ?>" src="" alt="">
                                                    <div class="card-body">
                                                        <h4 class="m-t-10" class="10" id="nama-dokter<?= $i ?>"></h4>
                                                        <div class="m-t-20">
                                                            <input type="radio" id="id_dokter<?= $i ?>" name="id_dokter" value="">
                                                            <p id="harga-dokter<?= $i ?>"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                            $i++;
                                            }
                                            ?>
                                            <p id="total-dokter" style="display:none"><?= $i ?></p>
                                        </div>
                                        <div class="text-center">
                                            <h3> Pilih Platform </h3>
                                        </div>
                                        <div class="row text-center">
                                        <div class="form-group d-grid gap-2 col-6 mx-auto">
                                                        <select name="platform" class="form-control">
                                                            <option value="zoom">Zoom Meeting</option>
                                                            <option value="gmeet">Google Meet</option>
                                                            <option value="wa">Whatsapp</option>
                                                        </select>
                                                    </div>
                                        </div>
                                                <div class="form-group d-grid gap-4 col-3 mx-auto">
                                                    				<select id="paymentUi" class="form-control">
                                                                        <option value="1">PopUp UI </option>
                                                                        <option value="2">Redirect UI</option>
                                                                    </select>      
                                                        <!-- <button type="submit" name="reservasi" class="btn btn-primary m-t-30">Lanjut Pembayaran</button> -->
                                                        <button type="button" id="submit" class="btn btn-primary w-100 my-3 shadow" onClick="pay();">Pay With Duitku</button>
                                                </div>    
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- Content Wrapper END -->

                    <!-- Footer START -->
                    <footer class="footer">
                        <div class="footer-content">
                            <p class="m-b-0">Copyright © 2019 Theme_Nate. All rights reserved.</p>
                            <span>
                                <a href="" class="text-gray m-r-15">Term &amp; Conditions</a>
                                <a href="" class="text-gray">Privacy &amp; Policy</a>
                            </span>
                        </div>
                    </footer>
                    <!-- Footer END -->

                </div>
                <!-- Page Container END -->


                <!-- Request to backend with ajax (example)  -->
                <script type="text/javascript">

                function pay() {
                    var amount = document.getElementById("harga-dokter").value ;
                    var productDetail = document.getElementById("poli").value ;
                    var email = document.getElementById("email").value ;
                    var phoneNumber = document.getElementById("phoneNumber").value ;
                    var paymentUi = document.getElementById("paymentUi").value ;
                    $.ajax({
                    type: "POST",
                    data:{
                        paymentAmount: amount, 
                        productDetail: productDetail, 
                        email: email, 
                        phoneNumber: phoneNumber
                    },
                    url: 'http://localhost:8080/medizo-15Nov/pasien/reservasi.php',
                    dataType: "json",
                    cache: false,
                    success: function (result) {
                                console.log(result.reference);
                                console.log(result);

                                if(paymentUi === "2"){ // user redirect payment interface
                                    window.location = result.paymentUrl;
                                }

                                checkout.process(result.reference, {
                                    successEvent: function(result){
                                        // tambahkan fungsi sesuai kebutuhan anda
                                        console.log('success');
                                        console.log(result);
                                        alert('Payment Success');
                                    },
                                    pendingEvent: function(result){
                                        // tambahkan fungsi sesuai kebutuhan anda
                                        console.log('pending');
                                        console.log(result);
                                        alert('Payment Pending');
                                    },
                                    errorEvent: function(result){
                                        // tambahkan fungsi sesuai kebutuhan anda
                                        console.log('error');
                                        console.log(result);
                                        alert('Payment Error');
                                    },
                                    closeEvent: function(result){
                                        // tambahkan fungsi sesuai kebutuhan anda
                                        console.log('customer closed the popup without finishing the payment');
                                        console.log(result);
                                        alert('customer closed the popup without finishing the payment');
                                    }
                                });

                    },
                });

                }
                </script>
                
                <!-- Core Vendors JS -->
                <script
                src="https://code.jquery.com/jquery-3.6.1.min.js"
                integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
                crossorigin="anonymous"></script>
                <script>
                    const rupiah = (number)=>{
                        return new Intl.NumberFormat("id-ID", {
                        style: "currency",
                        currency: "IDR"
                        }).format(number);
                    }
                    $(document).ready(function () {
                    $("#poli").change(function () {
                        let randPict = ['https://hips.hearstapps.com/hmg-prod/images/portrait-of-a-happy-young-doctor-in-his-clinic-royalty-free-image-1661432441.jpg?crop=0.66698xw:1xh;center,top&resize=640:*', 'https://img.freepik.com/free-photo/doctor-with-his-arms-crossed-white-background_1368-5790.jpg?w=2000', 'https://media.istockphoto.com/id/138205019/photo/happy-healthcare-practitioner.jpg?s=612x612&w=0&k=20&c=b8kUyVtmZeW8MeLHcDsJfqqF0XiFBjq6tgBQZC7G0f0=', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQIMe6HEc7DifivkRGonaLyQK81l9UxcQAgnsH-YLRf-wAv3CYwAWwJD4DTzMUuyQ8t6bw&usqp=CAU', 'https://img.freepik.com/free-photo/beautiful-young-female-doctor-looking-camera-office_1301-7807.jpg?w=2000', 'http://st.depositphotos.com/2208684/2391/i/450/depositphotos_23910421-Female-Doctor-At-The-Hospital..jpg']
                        let poli_id = $(this).val();
                        $.ajax({
                        url: "getDoctor.php",
                        method: "POST",
                        data: { poli_id: poli_id },
                        dataType: "text",
                        success: function (datas) {
                            datas = JSON.parse(datas);
                            for (let i = 1; i < parseInt($("#total-dokter").text()); i++) {
                                $("#dokter_wrap_content" + i).hide();
                                $("#dokter_wrap").hide();
                            }
                            let idSelector = 1;
                            datas.forEach((data) => {
                                $("#dokter_wrap").show();
                                $("#dokter_wrap_content" + idSelector).show();
                                $("#nama-dokter" + idSelector).html(data.nama_dokter);
                                $("#harga-dokter" + idSelector).html(rupiah(data.harga));
                                $("#id_dokter" + idSelector).val(data.user_id);
                                $("#foto-dokter" + idSelector).attr('src', randPict[Math.floor(Math.random() * randPict.length)]);
                                idSelector++;
                            });
                        },
                        });
                    });
                    });
                </script>
        <script src="assets/js/vendors.min.js"></script>

        <!-- page js -->

        <!-- Core JS -->
        <script src="assets/js/app.min.js"></script>

    </body>

    </html>