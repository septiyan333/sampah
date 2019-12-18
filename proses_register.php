<?php
//koneksi database
include 'koneksi.php';

//menangkap data yang dikirim dari form
$id_akun = $_POST['id_akun'];
$nama_lengkap = $_POST['nama_lengkap'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$no_telpon = $_POST['no_telpon'];
$nama_pengguna = $_POST['nama_pengguna'];
$kata_sandi = $_POST['kata_sandi'];
$status = $_POST['status'];
$jenis_kelamin = $_POST['jenis_kelamin'];
//menginput data ke database
$cek = mysqli_query($koneksi, "SELECT * FROM tb_akun WHERE id_akun='$id_akun'") or die(mysqli_error($koneksi));

if (mysqli_num_rows($cek) == 0) {
   $sql = mysqli_query($koneksi, "INSERT INTO tb_akun
              (id_akun,nama_lengkap,alamat, email,no_telpon, nama_pengguna,kata_sandi,status,jenis_kelamin) VALUES ('$id_akun','$nama_lengkap','$alamat' ,'$email','$no_telpon', '$nama_pengguna','$kata_sandi','$status','$jenis_kelamin')");
   if ($sql) {
      echo '<script>alert("Berhasil menambahkan data."); document.location="index.php";</script>';
   } else {
      echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
   }
} else {
   echo '<div class="alert alert-warning">Gagal, Nama sudah terdaftar.</div>';
}
