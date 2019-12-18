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
        <a class="navbar-brand" href="#">RIWAYAT</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link active" href="#">Beranda<span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="#">Edukasi</a>
            <a class="nav-item nav-link" href="#">Tentang</a>  
            <a class="nav-item btn btn-primary " href="Profil.html">Akun Saya</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->
	<div class = "container ng-scope" ng-app="sortApp" ng-controller="mainController">
	<div class = "alert alert-info">
	</div>
		<form class ="ng-pristine ng-valid">
			<div class ="form-group">
				<div class = "input-group">
					<div class = "input-group-addon"><i class = "fa fa-search"></i></div>
						<input type = "text" class ="form-control" placeholder="Search" ng-model="Search">
				</div>
			</div>
		</form>
		<div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Riwayat</div>
            <div class="card-body">
              <div class="table-responsive">
					<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                 <thead>
					<tr>
                      <th>No</th>
                      <th>Tanggal</th>
                      <th>Barang</th>
                      <th>Berat</th>
                      <th>Poin</th>
                      <th>Kurir</th>
                    </tr>
                  </thead>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>