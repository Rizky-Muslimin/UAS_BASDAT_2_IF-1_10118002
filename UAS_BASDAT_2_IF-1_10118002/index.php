<!DOCTYPE html>
<html>
<head>
	<title>DATA MAHASISWA</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

	<br/>
	<div class="card">
  <div class="card-header bg-success text-white">
    DATA MAHASISWA
  </div>
  	<br/>
	<a href="tambah.php">+ TAMBAH MAHASISWA</a>
	<br/>
  <div class="card-body">
	<table class="table table-bordered table-striped">
		<tr>
			<th>NO</th>
			<th>Nama</th>
			<th>NIM</th>
			<th>Alamat</th>
			<th>OPSI</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from mahasiswa");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['Nama_Mhs']; ?></td>
				<td><?php echo $d['NIM']; ?></td>
				<td><?php echo $d['Alamat']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
  </div>
</div>
	<link rel="stylesheet" type="text/javascript" href="js/bootstrap.min.js">
</body>
</html>