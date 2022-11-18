<?php
    session_start();
    include '../../koneksi.php';
    include '../../session-login.php';


          if (isset($_POST['submit'])) {
            $oldPassword = $_POST['oldPassword'];
            $newPassword = $_POST['newpassword'];
            $confirmPassword = $_POST['confirmPassword'];

            $cek_passwordnya = password_verify($password, $data_user['oldpassword']);

            $error = array();
            if (empty($oldpassword)) {
		        $error ['oldpassword'] = '*Tidak Boleh Kosong.';
            }
            if (empty($newpassword)) {
		        $error ['newpassword'] = '*Tidak Boleh Kosong.';
            } else if (strlen($newpassword) < 6 ){
		        $error ['newpassword'] = '*Kata Sandi Minimal 6 Karakter.';
            }
            if (empty($confirmPassword)) {
		        $error ['confirmpassword'] = '*Tidak Boleh Kosong.';
            } else if (strlen($confirmPassword) < 6 ){
		        $error ['confirmpassword'] = '*Kata Sandi Minimal 6 Karakter.';
            } else if ($newpassword <> $confirmPassword){
		        $error ['confirmpassword'] = '*Konfirmasi Kata Sandi Baru Tidak Sesuai.';
            } else {

            if ($cek_passwordnya <> $data_user['oldpassword']) {
                $_SESSION['hasil'] = array('alert' => 'danger', 'pesan' => 'Ups, Kata Sandi Lama Yang Kamu Masukkan Tidak Sesuai.<script>swal("Gagal!", "Kata Sandi Lama Yang Kamu Masukkan Tidak Sesuai.", "error"); window.location="setting.php"</script>');
            } else {

   		    if ($conn->query("UPDATE user SET password = '$newPassword' WHERE username = '$username'") == true) {
   			 echo "<script>alert('Update Sucessfully'); window.location='index.php'</script>";
		} else{
			echo "<script>alert('Your new and Retype Password is not match'); window.location='index.php'</script>";
		}

            }
        }
          }
?>