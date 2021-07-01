<?php 
include '../koneksi.php';

$nim	= $_POST['nim'];
$kode	= $_POST['kd_prodi'];
$nama	= $_POST['nama'];
$tempat = $_POST['tempat_lhr'];
$tgl 	= $_POST['tgl_lhr'];
$jk		= $_POST['jk'];
$agama	= $_POST['agama'];
$alamat	= $_POST['alamat'];
$tlp 	= $_POST['tlp'];
$tgl_m 	= $_POST['tgl_masuk'];
$kode_s = $_POST['kd_status'];


mysqli_query($koneksi, "UPDATE m_mahasiswa SET kd_prodi='$kode', nama='$nama', tempat_lhr='$tempat', agama='$agama', tgl_lhr='$tgl', jk='$jk', tgl_masuk='$tgl_m', kd_status='$kode_s', alamat='$alamat', tlp='$tlp' WHERE nim='$nim'");

header("location:mahasiswa.php");
?>