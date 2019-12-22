<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     
    <!-- My CSS -->
    <link rel="stylesheet" href="style_profil.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <title>HI Trash - Profil</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="Profil.php">PROFIL</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link active" href="halaman_pengguna.php">Beranda<span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="#">Edukasi</a>
            <a class="nav-item nav-link" href="#">Tentang</a>  
            <a class="nav-item btn btn-primary" href="#">Akun Saya</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Panel Poin -->
    <div class="row justify-content-center">
        <div class="col-md-4">
          <div class="row">
  
            <div class="card">
              <div class="card-body">
                <span class="card-title" >Poin Saya</span> 
                <span class="text-warning float-right">5400TP</span>
                <hr>
                <a href="tukarpoin.php" class="card-link"> <img src="img/money.png" alt="icon-tukar-poin">  Tukar Poin</a>
                <a href="#" class="float-right">Lihat Riwayat Poin</a>
              </div>
            </div>
          
          </div>
        </div>
      </div>
    <!-- Akhir Panel Poin -->
      
    <!-- Form -->
      <div class="form-image">
          <img src="img/profile-user.png" class="rounded-circle" alt="foto-profil" width="200px" height="200px">
          <div class="hi-nama">
            <h3>HI, Username</h>
          </div>
      </div>
  
      <div class="tabel">
        <table cellpadding=10>
          <tr>
            <td> <h5><img src="img/user.png" alt="icon-nama-lengkap" width="22px" height="22px">&nbspNama Lengkap</h5> </td>
            <td> <h5><span>Ekky Aulia Rahman</span></h5> </td>
          </tr>

          <tr>
            <td> <h5><img src="img/placeholder.png" alt="icon-email" width="22px" height="22px">&nbspAlamat</h5> </td>
            <td> <h5><span>Jl. Danau Toba no. 22</span></h5></td>
          </tr>

          <tr>
            <td> <h5><img src="img/envelope.png" alt="icon-email" width="22px" height="22px">&nbspE-mail</h5> </td>
            <td> <h5><span>ekkyrahmanx1@gmail.com</span></h5> </td>
          </tr>

          <tr>
            <td width="260px"> <h5><img src="img/telephone-3.png" alt="icon-no-telp" width="22px" height="22px">&nbspNo.Telepon</h5> </td>
            <td> <h5><span>082234827215</span></h5> </td>
            <td> <a class="nav-item btn btn-success tombol" data-toggle="modal" data-target="#myModal"> <span>Ubah Profil</span></a> </td>
          </tr>
        </table>
      </div>
        <!-- The Modal -->
          <div class="modal" id="myModal">
            <div class="modal-dialog">
              <div class="modal-content">

                <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title">Ubah Profil</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>

                  <!-- Modal body -->
                  <div class="modal-body">
                    <form>
                      <div class="form-group">
                        <label for="InputNama">Nama Lengkap</label>
                        <input type="text" class="form-control" id="InputNama" placeholder="Nama Lengkap Anda">
                      </div>
                      <div class="form-group">
                        <label for="InputAlamat">Alamat</label>
                        <input type="text" class="form-control" id="InputAlamat" placeholder="Alamat Anda">
                      </div>
                      <div class="form-group">
                        <label for="InputEmail">E-mail</label>
                        <input type="email" class="form-control" id="InputEmail" placeholder="Email Anda">
                      </div>
                      <div class="form-group">
                        <label for="InputTelp">No.Telepon</label>
                        <input type="text" class="form-control" id="InputTelp" placeholder="No.Telepon Anda">
                      </div>

                    </form>
                  </div>

                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success" data-dismiss="modal">Save Changes</button>
                  </div>

                </div>
              </div>
            </div>
  
    <!-- Akhir Form -->
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>