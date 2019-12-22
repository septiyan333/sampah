<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="style_riwayat.css">
    <title>HI Trash - Profil</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="#">Tukar Poin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link active" href="halaman_pengguna.php">Beranda<span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="#">Edukasi</a>
            <a class="nav-item nav-link" href="#">Tentang</a>
            <a class="nav-item btn btn-primary " href="Profil.html">Akun Saya</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->
	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
  <link rel="stylesheet" href="./style.css">

</head>

<body>
  <!-- partial:index.partial.html -->
  <div class="container">
    <!-- TOP TABS -->
    <div class="btn-group">
          <a href="tukarpoin.php?p=pulsa" class="btn btn-primary" role="button">Pulsa</a>
          <a href="tukarpoin.php?p=pakdat" class="btn btn-primary" role="button">Paket Data</a>
    </div>

<?php
  error_reporting(0);
  switch ($_GET['p']) {
    case 'pulsa':
      echo'<div class="tab-content">
        <!-- FIRST TAB -->
        <div class="tab-pane active" id="tab1">
          <div class="container-fluid">
            <hr>

             <table class="table" border="px">

          <tbody>
            <tr class="btn-warning">
            </tr>
            <tr>
              <td class="td-padding"><center>Pulsa OMG!<P><center>
        <h2>15</h2> <h4>Rb</h4><p>
        </div>
          <div class="text-right buttons-wrapper pull-right">
          <input type="submit" class="btn btn-primary" value="15.000 TP"></input>
          </div></td>
              <td class="td-padding"><center>Pulsa OMG!<P><center>
        <h2>20</h2> <h4>Rb</h4> <p>
        </div>
          <div class="text-right buttons-wrapper pull-right">
          <input type="submit" class="btn btn-primary" value="20.000 TP"></input>
          </div> </td>
            </tr>
            <tr>
              <td class="td-padding"><center>Pulsa OMG!<P><center>
        <h2>50</h2> <h4>Rb</h4><p>
        </div>
          <div class="text-right buttons-wrapper pull-right">
          <input type="submit" class="btn btn-primary" value="50.000 TP"></input>
          </div></td>
        <td class="td-padding"><center>Pulsa OMG!<P><center>
        <h2>150</h2> <h4>Rb</h4><p>
        </div>
          <div class="text-right buttons-wrapper pull-right">
          <input type="submit" class="btn btn-primary" value="150.000 TP"></input>
          </div></td>
            </tr>
        <tr>
        <td class="td-padding"><center>Pulsa OMG!<P><center>
        <h2>100</h2> <h4>Rb</h4><p>
        </div>
          <div class="text-right buttons-wrapper pull-right">
          <input type="submit" class="btn btn-primary" value="100.000 TP"></input>
          </div></td>
        <td class="td-padding"><center>Pulsa OMG! WOW! Special<P><center>
        <h2>200</h2> <h4>Rb</h4><p>
        </div>
          <div class="text-right buttons-wrapper pull-right">
          <input type="submit" class="btn btn-primary" value="200.000 TP"></input>
          </div></td>
        </tr>
        <tr>
        <body>
        </table>
        <hr>
      <!-- end Tab1 content -->';
      break;
    case 'pakdat':
        echo'<div class="tab-content">
          <!-- FIRST TAB -->
          <div class="tab-pane active" id="tab1">
            <div class="container-fluid">
              <hr>

               <table class="table" border="px">

            <tbody>
              <tr class="btn-warning">
              </tr>
              <tr>
                <td class="td-padding"><center>Internet OMG!<P><center>
          5 gb<p>
          </div>
            <div class="text-right buttons-wrapper pull-right">
            <input type="submit" class="btn btn-primary" value="35.000 TP"></input>
            </div></td>
                <td class="td-padding"><center>Internet OMG!<P><center>
           2.5 gb<p>
          </div>
            <div class="text-right buttons-wrapper pull-right">
            <input type="submit" class="btn btn-primary" value="20.000 TP"></input>
            </div> </td>
              </tr>
              <tr>
                <td class="td-padding"><center>Paket Internet<P><center>
          500 Mb<p>
          </div>
            <div class="text-right buttons-wrapper pull-right">
            <input type="submit" class="btn btn-primary" value="4000 TP"></input>
            </div></td>
          <td class="td-padding"><center>Paket Internet<P><center>
          2.5 gb<p>
          </div>
            <div class="text-right buttons-wrapper pull-right">
            <input type="submit" class="btn btn-primary" value="21.000 TP"></input>
            </div></td>
              </tr>
          <tr>
          <td class="td-padding"><center>Internet Combo<P><center>
          10 gb<p>
          </div>
            <div class="text-right buttons-wrapper pull-right">
            <input type="submit" class="btn btn-primary" value="67.000 TP"></input>
            </div></td>
          <td class="td-padding"><center>Paket Special<P><center>
          3 gb<p>
          </div>
            <div class="text-right buttons-wrapper pull-right">
            <input type="submit" class="btn btn-primary" value="5000 TP"></input>
            </div></td>
          </tr>
          <tr>
          <body>
          </table>
          <hr>
        <!-- end Tab1 content -->';
        break;
    default:
      echo "";
      break;
  }

?>
  <a href="poin.php" class="btn btn-warning" role="button">Kembali</a>

	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</div> <!-- end container-fluid -->
      </div> <!-- end tab-content -->
    </div><!--  end container -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
    <script src="./script.js"></script>
    <!-- <script src="javascript.js"></script> -->
  </body>
</html>
