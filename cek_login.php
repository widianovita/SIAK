<?php 
//aktifkan session
session_start();

include 'koneksi.php';

$user = $_POST['username'];
$pass = md5($_POST['password']);

$login = mysqli_query($koneksi,"select * from user where username='$user' and password='$pass'");

$cek = mysqli_num_rows($login);

//cek apakah username dan password di temukan pada database
if($cek > 0) {
	$_SESSION['username'] = $user;
	$_SESSION['status'] = "login";
	header("location:dashboard.php");
}
else{
	header("location:login_alert.php?pesan=gagal");
}
 ?>