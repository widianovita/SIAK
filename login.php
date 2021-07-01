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

    <title>Login | ARMY UNIVERSITY</title>
  </head>
  <body>
    <!-- Image and text -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #6f42c1;">
      <a class="navbar-brand ml-3" href="#">
        <img src="img/army.png" width="30" height="30" class="d-inline-block align-top" alt="">
        <b>ARMY University</b>
      </a>
    </nav>

    <div class="container no-gutters mt-5">
      <div class="row">
        <div class="col-md-5 p-5 pt-4">
            <br>
            <br>
          <div class="card mt-5 ml-5 mr-2">
                    <div class="card-header bg-transparent mb-0"><h5 class="text-center"><span class="font-weight-bold text-primary">LOGIN</span></h5></div>
                    <div class="card-body">
                      <form action="cek_login.php" method="post">
                        <div class="form-group">
                          <input type="text" name="username" class="form-control" placeholder="Username">
                        </div>
                        <div class="form-group">
                          <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-group custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                          <label class="custom-control-label" for="customControlAutosizing">Remember me</label>
                        </div>
                        <div class="form-group">
                          <input type="submit" name="" value="Login" class="btn btn-primary btn-block">
                        </div>
                      </form>
                    </div>
                  </div>
          
        </div>
        <span class="border-right border-dark mt-5 mb-3"></span>
        <div class="col-md-6 p-5 pt-4 ml-5">
          <h2>안녕하세요,</h2>
          <br>
          <br>
          <center>
              <h3>Welcome to UNIVERSE</h3>
              <br>
              <img src="img/bomb.jpg" width="200" height="200" class="figure-img rounded-circle" alt="">
              <blockquote class="blockquote">
                <p class="mb-0">People say the world has changed. But between you and me thankfully, nothing has changed.</p>
                <footer class="blockquote-footer">BTS <cite title="Source Title">Life Goes On</cite></footer>
              </blockquote>
          </center>

        </div>
      </div>
    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
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