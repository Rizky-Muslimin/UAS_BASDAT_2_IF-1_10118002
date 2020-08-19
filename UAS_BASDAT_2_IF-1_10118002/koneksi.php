<?php 
$koneksi = mysqli_connect("localhost:3309","root","1234","akademik");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>