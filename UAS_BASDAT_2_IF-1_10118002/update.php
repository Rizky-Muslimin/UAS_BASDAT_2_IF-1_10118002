<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$Nama_Mhs = $_POST['Nama_Mhs'];
$NIM = $_POST['NIM'];
$Alamat = $_POST['Alamat'];

// update data ke database
mysqli_query($koneksi,"update mahasiswa set Nama_Mhs='$Nama_Mhs', NIM='$NIM', Alamat='$Alamat' where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>