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
	<br/>
	<div class="card">
  <div class="card-header bg-success text-white">
    TAMBAH DATA MAHASISWA
  </div>
  <div class="card-body">
	<table class="table table-bordered table-striped">
	<form method="post" action="tambah_aksi.php">
			<div class="form-group">			
				<label>Nama</label></br></br>
				<input type="text" name="Nama_Mhs">
			</div>		
			<div class="form-group">
				<label>NIM</label></br>
				<input type="text" name="NIM">
			</div>
			<div class="form-group">
				<label>Alamat</label></br>
				<input type="text" name="Alamat">
			</div>
			
				<input type="submit" value="SIMPAN">
			</tr>		
		</table>
	</form>
	</div>
</div>
		<link rel="stylesheet" type="text/javascript" href="js/bootstrap.min.js">
</body>
</html>