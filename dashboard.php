<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="fontawesome-free/css/all.min.css">

    <title>Dashboard | ARMY University</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #6f42c1;">
      <a class="navbar-brand" href="#">
        <img src="img/army.png" width="30" height="30" class="d-inline-block align-top" alt="">
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
            <a class="nav-link active text-white" href="dashboard.php"><i class="fas fa-tachometer-alt mr-2"></i> Dashboard</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="mahasiswa/mahasiswa.php"><i class="fas fa-user-graduate mr-2"></i> Mahasiswa</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="dosen/dosen.php"><i class="fas fa-chalkboard-teacher mr-2"></i> Dosen</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="matakuliah/matakuliah.php"><i class="fas fa-book-reader mr-2"></i> Mata Kuliah</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="nilai/nilai.php"><i class="fas fa-money-check mr-2"></i> Nilai Mahasiswa</a><hr class="bg-secondary">
          </li>
        </ul>
      </div>
      <div class="col-md-10 p-5 pt-4">
        <h3><i class="fas fa-tachometer-alt mr-2"></i> DASHBOARD</h3><hr>

        <div class="row text-white">
          <div class="card bg-info ml-5 mt-2" style="width: 18rem;">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-user-graduate mr-2"></i>
              </div>
              <h5 class="card-title">JUMLAH MAHASISWA</h5>
              <div class="display-4">1.200</div>
              <a href="#"><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
            </div>
          </div>

          <div class="card bg-success ml-5 mt-2" style="width: 18rem;">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-chalkboard-teacher mr-2"></i> 
              </div>
              <h5 class="card-title">JUMLAH DOSEN</h5>
              <div class="display-4">50</div>
              <a href="#"><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
            </div>
          </div>

          <div class="card bg-warning ml-5 mt-2" style="width: 18rem;">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-book-reader mr-2"></i>
              </div>
              <h5 class="card-title">DATA MATA KULIAH</h5>
              <div class="display-4">70</div>
              <a href="#"><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
            </div>
          </div>
        </div>

        <div class="row mt-4">
          <div class="card ml-5 text-white text-center" style="width: 18rem;">
            <div class="card-header bg-secondary display-4 pt-4 pb-4">
              <i class="fab fa-instagram"></i>
            </div>
            <div class="card-body">
              <h5 class="card-title text-secondary">INSTAGRAM</h5>
              <a href="#" class="btn btn-secondary">follow</a>
            </div>
          </div>

          <div class="card ml-5 text-white text-center" style="width: 18rem;">
            <div class="card-header bg-primary display-4 pt-4 pb-4">
              <i class="fab fa-twitter"></i>
            </div>
            <div class="card-body">
              <h5 class="card-title text-primary">TWITTER</h5>
              <a href="#" class="btn btn-primary">follow</a>
            </div>
          </div>

          <div class="card ml-5 text-white text-center" style="width: 18rem;">
            <div class="card-header bg-danger display-4 pt-4 pb-4">
              <i class="fab fa-youtube"></i>
            </div>
            <div class="card-body">
              <h5 class="card-title text-danger">YOUTUBE</h5>
              <a href="#" class="btn btn-danger">subscribe</a>
            </div>
          </div>
        </div>
        <hr class="garis mt-5">
        <div class="footers">
          <center>
            <p>Copyright &copy; Widia Novita Sari - 2021</p>
          </center>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>  
    <script type="text/javascript" src="style.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
