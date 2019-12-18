<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Daftar Akun</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <style>
  .bg-register-image {
    background-image: url("trash.jpg");
    background-position: center;
    background-size: cover;
  }
  </style>
</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Buat Akun</h1>
              </div>
              <form method="post" class="user" action="proses_register.php">
                <div class="form-group rows">
			</div>
                  <div class="from-grup">
                    <input name="nama_lengkap""type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Nama Lengkap">
                  </div>
				  <div class="from-grup">
                    <input name="alamat"type="text" class="form-control form-control-user" id="exampleAlamat" placeholder="Alamat">
                  </div>
				  <div class="from-grup">
                    <input name="email"type="text" class="form-control form-control-user" id="exampleEmail" placeholder="Email">
                  </div>
				  
				  <div class="from-grup">
                    <input name="no_telpon"type="text" class="form-control form-control-user" id="exampleNotlp" placeholder="Nomor Telepon">
                  </div>
				  
				  <div class="from-grup">
                    <input name="nama_pengguna"type="text" class="form-control form-control-user" id="examplePengguna" placeholder="Nama Pengguna">
                  </div>
				  
				  <div class="from-grup">
                    <input name="kata_sandi"type="text" class="form-control form-control-user" id="exampleSandi" placeholder="Kata Sandi">
                  </div>
				  <div class="form-group">
					<input type="radio" name="jenis_kelamin" value="L">Laki Laki
					<input type="radio" name="jenis_kelamin" value="P">Perempuan
					</span>
				</div>
					<div class="form-group">
					<select name="status">
					<option value="kurir">KURIR</option>
					<option value="pengguna">PENGGUNA</option>
				</select>
				</span>
				</div>
				   </div>
                    <input name="submit" type="submit" value="Daftar" class="btn btn-primary btn-user btn-block">
				  <hr>
					 </form>
                  <div class="text-center">
                    <a class="small" href="index.php">Sudah punya Akun? Masuk</a>
					</div>
                  <hr>
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
