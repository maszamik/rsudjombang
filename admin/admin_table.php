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
                                <a class="breadcrumb-item" href="#">List User</a>
                                <span class="breadcrumb-item active">Admin</span>
                            </nav>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h4>List User</h4>                            
                            <div class="m-t-25">
                                <?php
                                    $sql = "SELECT * FROM user AS r
                                    LEFT JOIN user_level AS ul ON r.user_level_id = ul.user_level_id";
                                    $result = $conn -> query($sql);

                                    if (mysqli_num_rows($result) > 0) {
                                ?>
                                <table id="data-table" class="table">
                                    <thead>
                                         <tr>
                                            <th>No</th>
                                            <th>Jabatan</th>
                                            <th>Email</th>
                                            <th>Nama Lengkap</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $i=1;
                                            while($row = mysqli_fetch_array($result)) {
                                            
                                        ?>
                                        <tr id="<?php echo $row['user_id'];?>">
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $row["role"]; ?></td>
                                            <td><?php echo $row["email"]; ?></td>
                                            <td><?php echo $row["nama_lengkap"]; ?></td>
                                            <?php
                                                if ($row["status"]=="1"){
                                                    $status="Aktif";
                                                    echo "<td><span class='badge badge-success badge-dot m-r-10'></span>".$status."</td>";
                                                } elseif ($row["status"]=="0"){
                                                    $status="Tidak Aktif";
                                                    echo "<td><span class='badge badge-danger badge-dot m-r-10'></span>".$status."</td>";
                                                }

                                            ?>

                                            <td>
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#hasilkonsul<?php echo $row['user_id'];?>">
                                                    <i class="anticon anticon-edit"></i>
                                                </button>
                                               
                                                <!-- Edit Modal START -->
                                                <div class="modal fade" id="hasilkonsul<?php echo $row['user_id'];?>" role="dialog" aria-labelledby="hasilkonsulLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="hasilkonsulLabel">Edit User</h5>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                            <form method="POST" action="update.php?id=<?php echo $row['user_id']; ?>">
                                                                <div class="form-group">
                                                                    <label for="formGroupExampleInput">Username:</label>
                                                                    <input type="text" class="form-control" value="<?php echo $row['username']; ?>" name="username">
                                                                    </div>
                                                                <div class="form-group">
                                                                    <label for="formGroupExampleInput">Password:</label>
                                                                    <input type="text" class="form-control" value="<?php echo $row['password']; ?>" name="password">
                                                                    </div>
                                                                <div class="form-group">
                                                                    <label for="formGroupExampleInput">Nama Lengkap:</label>
                                                                    <input type="text" class="form-control" value="<?php echo $row['nama_lengkap']; ?>" name="nama_lengkap">
                                                                    </div>
                                                                <div class="form-group">
                                                                    <label for="formGroupExampleInput">Jabatan:</label>
                                                                    <input type="text" class="form-control" value="<?php echo $row['role']; ?>" name="role">
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button class="btn btn-success" type="submit" name="submit">Edit</button>
                                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                </div>
                                                            </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Edit Modal END -->
                                            </td>
                                        </tr>
                                        <?php
                                            $i++;
                                            }
                                        ?>
                                    </tbody>
                                </table>
                                <?php
                                    }
                                    else{
                                    echo "No result found";
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php require('2_footer.php'); ?>
                <!-- Content Wrapper END -->
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