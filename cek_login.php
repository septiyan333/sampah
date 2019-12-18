<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$nama_pengguna = $_POST['nama_pengguna'];
$kata_sandi = $_POST['kata_sandi'];


// menyeleksi data user dengan nama_pengguna dan kata_sandi yang sesuai
$login = mysqli_query($koneksi, "select * from tb_akun where nama_pengguna='$nama_pengguna' and kata_sandi='$kata_sandi'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah nama_pengguna dan kata_sandi di temukan pada database
if ($cek > 0) {

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if ($data['status'] == "kurir") {

		// buat session login dan nama_pengguna
		$_SESSION['nama_pengguna'] = $nama_pengguna;
		$_SESSION['status'] = "kurir";
		// alihkan ke halaman dashboard admin
		header("location:halaman_kurir.php");

		// cek jika user login sebagai pengguna
	} else if ($data['status'] == "pengguna") {
		// buat session login dan nama_pengguna
		$_SESSION['nama_pengguna'] = $nama_pengguna;
		$_SESSION['status'] = "pengguna";
		// alihkan ke halaman dashboard pengguna
		header("location:halaman_pengguna.php");
	} else {

		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}
} else {
	header("location:index.php?pesan=gagal");
}
