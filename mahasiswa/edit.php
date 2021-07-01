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

    <title>Edit Data Mahasiswa | ARMY University</title>
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
          <a href="logout.php"><i class="fas fa-sign-out-alt mr-3 text-dark" data-toggle="tooltip" title="Log Out"></i></a>
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

        <div class="form-mhs mt-2">
          <h5>Edit Data Mahasiswa</h5>

          <?php
          include '../koneksi.php';

          $nim = $_GET['nim'];
          $data = mysqli_query($koneksi,"select * from m_mahasiswa where nim='$nim'");
          while($d = mysqli_fetch_array($data)){ 
          ?>

          <form method="post" action="update.php" class="tbl mt-4">
            <div class="form-group row">
              <label for="colFormLabel" class="col-sm-2 col-form-label">NIM</label>
              <div class="col-sm-10">
                <input type="number" class="form-control" id="colFormLabel" placeholder="" name="nim" value="<?php echo $d['nim']; ?>">
              </div>
            </div>
            <div class="form-group row">
              <label for="colFormLabel" class="col-sm-2 col-form-label">Kode Prodi</label>
              <div class="col-sm-10">
                <select class="form-control" name="kd_prodi">
                  <option value="-">-- Pilih --</option>
                  <?php 
                  $kd_prodi = mysqli_query($koneksi,"select * from m_prodi");
                  while ($data_prodi = mysqli_fetch_array($kd_prodi)) {
                    if($d['kd_prodi']==$data_prodi['kd_prodi']) {
                      $select = "selected";
                    }
                    else {
                      $select = "";
                    }
                    echo "<option $select>".$data_prodi['kd_prodi']."</option>";
                  }
                  ?>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="colFormLabel" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="colFormLabel" placeholder="" name="nama" value="<?php echo $d['nama']; ?>">
              </div>
            </div>
            <div class="form-group row">
              <label for="colFormLabel" class="col-sm-2 col-form-label">Tempat Lahir</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="colFormLabel" placeholder="" name="tempat_lhr" value="<?php echo $d['tempat_lhr']; ?>">
              </div>
            </div>
            <div class="form-group row">
              <label for="colFormLabel" class="col-sm-2 col-form-label">Tanggal Lahir</label>
              <div class="col-sm-10">
                <input type="date" class="form-control" id="colFormLabel" placeholder="" name="tgl_lhr" value="<?php echo $d['tgl_lhr']; ?>">
              </div>
            </div>
            <div class="form-group row">
              <label for="colFormLabel" class="col-sm-2 col-form-label">Jenis Kelamin</label>
              <div class="col-sm-10">
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" id="customRadioInline1" name="jk" class="custom-control-input" value="L" <?php if($d['jk']=='L') echo 'checked' ?>>
                  <label class="custom-control-label" for="customRadioInline1">Laki - laki</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" id="customRadioInline2" name="jk" class="custom-control-input" value="P" <?php if($d['jk']=='P') echo 'checked' ?>>
                  <label class="custom-control-label" for="customRadioInline2">Perempuan</label>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label for="colFormLabel" class="col-sm-2 col-form-label">Agama</label>
              <div class="col-sm-10">
                <?php 
                $agama = $d['agama']; 
                ?>
                <select class="form-control" name="agama">
                  <option value="-">-- Pilih --</option>
                  <option <?php echo ($agama=='Islam') ? "selected": "" ?>>Islam</option>
                  <option <?php echo ($agama=='Kristen') ? "selected": "" ?>>Kristen</option>
                  <option <?php echo ($agama=='Khatolik') ? "selected": "" ?>>Khatolik</option>
                  <option <?php echo ($agama=='Protestan') ? "selected": "" ?>>Protestan</option>
                  <option <?php echo ($agama=='Budha') ? "selected": "" ?>>Budha</option>
                  <option <?php echo ($agama=='Hindu') ? "selected": "" ?>>Hindu</option>
                  <option <?php echo ($agama=='Konghucu') ? "selected": "" ?>>Konghucu</option>
                  <option <?php echo ($agama=='Atheis') ? "selected": "" ?>>Atheis</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="colFormLabel" class="col-sm-2 col-form-label">Alamat</label>
              <div class="col-sm-10">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alamat"><?php echo $d['alamat']; ?></textarea>
              </div>
            </div>
            <div class="form-group row">
              <label for="colFormLabel" class="col-sm-2 col-form-label">Telepon</label>
              <div class="col-sm-10">
                <input type="number" class="form-control" id="colFormLabel" placeholder="" name="tlp" value="<?php echo $d['tlp']; ?>">
              </div>
            </div>
            <div class="form-group row">
              <label for="colFormLabel" class="col-sm-2 col-form-label">Tanggal Masuk</label>
              <div class="col-sm-10">
                <input type="date" class="form-control" id="colFormLabel" placeholder="" name="tgl_masuk" value="<?php echo $d['tgl_masuk']; ?>">
              </div>
            </div>
            <div class="form-group row">
              <label for="colFormLabel" class="col-sm-2 col-form-label">Kode Status</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="colFormLabel" placeholder="" name="kd_status" value="<?php echo $d['kd_status']; ?>">
              </div>
            </div>

            <div class="form-group row">
              <label for="colFormLabel" class="col-sm-2 col-form-label"></label>
              <div class="col-sm-10">
                <input class="btn btn-primary" type="submit" value="Submit">
                <input class="btn btn-danger ml-3" type="reset" value="Reset">
              </div>
            </div>
          </form>
          <?php 
          }
          ?>
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