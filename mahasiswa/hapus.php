<?php 
include '../koneksi.php';

$nim = $_GET['nim'];
$query = mysqli_query($koneksi,"delete from m_mahasiswa where nim='$nim'");


//apakah berhasil dihapus?
if($query){
	header("location:mahasiswa.php");
} else{
	die("gagal menghapus !");
}
?>