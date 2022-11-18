<div class="m-t-25">
                                <button type="submit" id="pdf" name="generate_pdf" class="btn btn-primary"><i class="fa fa-pdf" "="" aria-hidden="true"></i>+ Tambah User</button>
                                <table id="data-table" class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Jabatan</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Nama Lengkap</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                            include("../koneksi.php");
                                            $sql = "SELECT * FROM user AS r 
                                            LEFT JOIN user_level AS ul ON r.user_level_id = ul.user_level_id";

                                            $num = 0;
                                            $result = $conn->query($sql);
                                            
                                            if( isset( $_POST['delete'] ) ) {

                                                echo $did = $_POST['user_id'];
                                                $query = $link->prepare( "DELETE FROM user WHERE user_id=?" );
                                                $query->bind_param( "s", $did );
                                                $query->execute();
                                            }

                                            if ($result->num_rows > 0) {
                                            // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                                    $num = $num + 1;
                                                    echo "<tr><td>" .$num.
                                                         "</td><td>".$row["role"].
                                                         "</td><td>" . $row["username"] .
                                                         "</td><td>". $row["password"].
                                                         "</td><td>" . $row["nama_lengkap"] .
                                                         "</td><td>";
                                                    echo "<button class='btn btn-icon btn-primary'>
                                                            <i class='anticon anticon-eye'></i></button>";
                                    ?>
                                    <button type="button" class="btn -icon btn-success" data-toggle="modal" data-target="#user<?php echo $row['user_id'];?>">
                                            <i class='anticon anticon-edit'></i>
                                        </button>

                                    <!-- Edit Modal START -->
                                    <div class="modal fade" id="user<?php echo $row['user_id'];?>" role="dialog" aria-labelledby="user" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="userLabel">Edit User</h5>
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
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-success" type="submit" name="submit">Edit</button>
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                    </div>
                                            </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Edit Modal END -->
                                            <?php
                                                    // echo "<a href='admin_edit.php?id=".$row['user_id']."'>
                                                    //         <button class='btn btn-icon btn-success'>
                                                    //         <i class='anticon anticon-edit'></i></button></a>";
                                                    echo "<a href='delete.php?id=".$row['user_id']."'>
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