<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$Nama_Mhs = $_POST['Nama_Mhs'];
$NIM = $_POST['NIM'];
$Alamat = $_POST['Alamat'];

// menginput data ke database
mysqli_query($koneksi,"insert into mahasiswa values('','$Nama_Mhs','$NIM','$Alamat')");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>