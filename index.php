<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Halaman Masuk</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" href="sb-admin-2.css">
  <link rel="stylesheet" href="css/style.css">
  <style>
  .bg-login-image {
    background-image: url("trash.jpg");
    background-position: center;
    background-size: cover;
  }
  </style>
</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    
                    <img src="logo trash.jpg" alt="">
                  </div>
                  <form class="user" method="post" action="cek_login.php">
                    <div class="form-group">
                      <input name="nama_pengguna" type="text" class="form-control form-control-user" id="exampleInputUsername" aria-describedby="emailHelp" placeholder="nama pengguna">
                    </div>
                    <div class="form-group">
                      <input name="kata_sandi" type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="kata sandi">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input name="remember_me" type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Ingatkan Saya</label>
                      </div>
                    </div>
                    <input type="submit" value="LOGIN" class="btn btn-primary btn-user btn-block">
                    <hr>
					 </form>
                  <div class="text-center">
                    <a class="small" href="#">Lupa Kata Sandi? Dapatkan Bantuan</a>
                  </div>
                  <hr>
                  <div class="text-center">
                    <a class="small" >Tidak Punya Akun?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="register.php">Buat Akun</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
