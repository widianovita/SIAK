<?php 
include "../koneksi.php";

$nim 	= $_POST['nim'];
$kode	= $_POST['kd_prodi'];
$nama	= $_POST['nama'];
$tempat	= $_POST['tempat'];
$tgl	= $_POST['tgl_lhr'];
$jk		= $_POST['customRadioInline'];
$agama	= $_POST['agama'];
$alamat	= $_POST['alamat'];
$tlp	= $_POST['tlp'];
$tgl_m	= $_POST['tgl_msk'];
$kode_s	= $_POST['kd_status'];

mysqli_query($koneksi,"INSERT INTO m_mahasiswa values ('$nim','$kode','$nama','$tempat','$agama','$tgl','$jk','$tgl_m','$kode_s','$alamat','$tlp')");

header("location:mahasiswa.php");

?>