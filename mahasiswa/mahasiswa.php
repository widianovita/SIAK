<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="stylesheet" type="text/css" href="../fontawesome-free/css/all.min.css">

    <title>Mahasiswa | ARMY University</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #6f42c1;">
      <a class="navbar-brand" href="#">
        <img src="../img/army.png" width="30" height="30" class="d-inline-block align-top" alt="">
        <b>ARMY UNIVERSITY</b>
      </a>
      <form class="form-inline my-2 my-lg-0 ml-auto">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
      </form>
      
      <div class="icon ml-4">
        <h5>
          <i class="fas fa-envelope mr-3" data-toggle="tooltip" title="Inbox"></i>
          <i class="fas fa-bell mr-3" data-toggle="tooltip" title="Notification"></i>
          <a href="../logout.php"><i class="fas fa-sign-out-alt mr-3 text-dark" data-toggle="tooltip" title="Log Out"></i></a>
        </h5>
      </div>
    </nav>

    <div class="row no-gutters mt-5">
      <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
        <ul class="nav flex-column ml-3 mb-5">
          <li class="nav-item">
            <a class="nav-link active text-white" href="../dashboard.php"><i class="fas fa-tachometer-alt mr-2"></i> Dashboard</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="mahasiswa.php"><i class="fas fa-user-graduate mr-2"></i> Mahasiswa</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="../dosen/dosen.php"><i class="fas fa-chalkboard-teacher mr-2"></i> Dosen</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="../matakuliah/matakuliah.php"><i class="fas fa-book-reader mr-2"></i> Mata Kuliah</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="../nilai/nilai.php"><i class="fas fa-money-check mr-2"></i> Nilai Mahasiswa</a><hr class="bg-secondary">
          </li>
        </ul>
      </div>
      <div class="col-md-10 p-5 pt-4">
        <h3><i class="fas fa-user-graduate mr-2"></i> MAHASISWA</h3><hr>

        <div class="row">
          <div class="button-tambah ml-3 mt-1">
            <a class="btn btn-success" href="tambah.php" role="button"><i class="fas fa-plus"></i> Tambah</a> 
          </div>
          <nav class="navbar navbar-light bg-light ml-auto">
            <form class="form-inline" action="" method="post">
              <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="cari">
              <button class="btn btn-info" type="submit">Search</button>
            </form>
          </nav>

          <div class="table-responsive mt-3 ml-3">
            <table class="table table-bordered">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">NIM</th>
                  <th scope="col">Kode Prodi</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Tempat Lahir</th>
                  <th scope="col">Tanggal Lahir</th>
                  <th scope="col">Jenis Kelamin</th>
                  <th scope="col">Agama</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Telepon</th>
                  <th scope="col">Tanggal Masuk</th>
                  <th scope="col">Kode Status</th>
                  <th colspan="2" scope="col">Opsi</th>
                </tr>
              </thead>

              <tbody>
                <?php
                include '../koneksi.php';

                $batas = 5;
                $hal = @$_GET['hal'];
                if(empty($hal)){
                  $posisi = 0;
                  $hal = 1;
                } else {
                  $posisi = ($hal - 1) * $batas;
                }

                $no = 1;
                if($_SERVER['REQUEST_METHOD'] == "POST") {
                  $cari = trim(mysqli_real_escape_string($koneksi, $_POST['cari']));
                  if($cari != ''){
                    $sql = "SELECT * FROM m_mahasiswa where nama like '%$cari%'";
                    $query = $sql;
                    $queryJml = $sql;
                  } else {
                    $query = "SELECT * FROM m_mahasiswa LIMIT $posisi, $batas";
                    $queryJml = "SELECT * FROM m_mahasiswa";
                    $no = $posisi + 1;
                  }
                } else {
                  $query = "SELECT * FROM m_mahasiswa LIMIT $posisi, $batas";
                  $queryJml = "SELECT * FROM m_mahasiswa";
                  $no = $posisi + 1;
                }

                $prev = $hal - 1;
                $next = $hal + 1;

                $sql_mhs = mysqli_query($koneksi, $query) or die (mysqli_error($koneksi));
                if(mysqli_num_rows($sql_mhs) > 0){
                  while($d = mysqli_fetch_array($sql_mhs)) { ?>
                <tr>
                  <th scope="row"><?php echo $no++; ?>.</th>
                  <td><?php echo $d['nim']; ?></td>
                  <td><?php echo $d['kd_prodi']; ?></td>
                  <td><?php echo $d['nama']; ?></td>
                  <td><?php echo $d['tempat_lhr']; ?></td>
                  <td><?php echo $d['tgl_lhr']; ?></td>
                  <td><?php echo $d['jk']; ?></td>
                  <td><?php echo $d['agama']; ?></td>
                  <td><?php echo $d['alamat']; ?></td>
                  <td><?php echo $d['tlp']; ?></td>
                  <td><?php echo $d['tgl_masuk']; ?></td>
                  <td><?php echo $d['kd_status']; ?></td>
                  <td>
                    <a class="btn btn-warning ml-2 mr-2" href="edit.php?nim=<?php echo $d['nim']; ?>" role="button"><i class="far fa-edit"></i></a> 
                  </td>
                  <td>
                    <a class="btn btn-danger ml-2 mr-2" href="hapus.php?nim=<?php echo $d['nim']; ?>" role="button"><i class="fas fa-trash"></i></a>
                  </td>
                </tr>
                <?php 
                  }
                } else {
                  echo "<tr><td colspan=\"13\" align=\"center\">Data tidak ditemukan</td></tr>";
                }
                ?>
              </tbody>
            </table>
          </div>

          <?php 
          if(isset($_POST['cari'])) { 
            echo "<div class=\"cr ml-3\" style=\"float:left;\">";
              $jml = mysqli_num_rows(mysqli_query($koneksi, $queryJml));
              echo "Data Hasil Pencarian : <b>$jml</b>";
              echo "</div>";
          } else {
          ?>

            <div class="pg ml-3 pt-2" style="float:left;">
              <?php
              $jml = mysqli_num_rows(mysqli_query($koneksi, $queryJml));
              echo "Jumlah Data : <b>$jml</b>";
              ?>
            </div>
            <div class="page mt-5 mx-auto">
              <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                  <li class="page-item">
                    <a class="page-link" <?php if($hal > 1){ echo "href='?hal=$prev'"; } ?> tabindex="-1" aria-disabled="true">Previous</a>
                  </li>
                  <?php 
                  $jml_hal = ceil($jml / $batas);
                  for($x=1;$x<=$jml_hal;$x++) { 
                    if ($x != $hal) {
                  ?>
                  <li class="page-item"><a class="page-link" href="?hal=<?php echo $x ?>"><?php echo $x; ?></a></li>
                  <?php 
                  }
                  else { 
                  ?>
                  <li class="page-item active"><a class="page-link"><?php echo $x; ?></a></li>
                  <?php } } ?>
                  <li class="page-item">
                    <a class="page-link" <?php if($hal < $jml_hal) { echo "href='?hal=$next'"; } ?>>Next</a>
                  </li>
                </ul>
              </nav>
            </div>

          <?php } ?>
            

        </div>
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>  
    <script type="text/javascript" src="../style.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>

