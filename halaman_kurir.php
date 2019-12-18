<!DOCTYPE html>
<html>

<head>
	<title>Halaman Ketua</title>
</head>

<body>
	<?php
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if ($_SESSION['status'] == "") {
		header("location:index.php?pesan=gagal");
	}

	?>
	<h1>Halaman Admin</h1>

	<p>Halo <b><?php echo $_SESSION['nama_pengguna']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['status']; ?></b>.</p>
	<a href="logout.php">LOGOUT</a>

	<br />
	<br />

</body>

</html>