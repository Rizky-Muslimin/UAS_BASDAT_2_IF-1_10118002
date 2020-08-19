<!DOCTYPE html>
<html>
<head>
	<title>DATA MAHASISWA</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<p>
	<div class="card">
  <div class="card-header bg-success text-white">
    EDIT DATA MAHASISWA
  </div>
  <div class="card-body">
	<table class="table table-bordered table-striped">
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from mahasiswa where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<div class="form-group">			
					<label>Nama</label></br>
					<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
					<input type="text" name="Nama_Mhs" value="<?php echo $d['Nama_Mhs']; ?>">
			</div>		
			<div class="form-group">
					<label>NIM</label></br>
					<input type="text" name="NIM" value="<?php echo $d['NIM']; ?>">
			</div>
			<div class="form-group">
					<label>Alamat</label></br>
					<input type="text" name="Alamat" value="<?php echo $d['Alamat']; ?>">
			</div>
					<input type="submit" value="SIMPAN">
			</table>
		</form>
</div>
</div>
		<?php 
	}
	?>
	<link rel="stylesheet" type="text/javascript" href="js/bootstrap.min.js">
</body>
</html>