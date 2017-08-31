<?php
include ('/laragon/www/relasi/koneksi.php');
$id 	= $_GET['id'];
$mhs	= mysqli_query($koneksi,"SELECT mahasiswa.id, mahasiswa.nama, mahasiswa.nim, dosen.nama as nama_dosen FROM mahasiswa JOIN dosen ON dosen.id = mahasiswa.id_dosen");
$data	= mysqli_fetch_array($mhs);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="/relasi/tampilan/js/jquery.js"></script>
	<script type="text/javascript" src="/relasi/tampilan/js/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="/relasi/tampilan/css/bootstrap.css">
</head>
<body>
<div class="container">
	<div class="jumbotron"> 
	<div class="container">
		<center><h2>Data Mahasiswa</h2></center><br>
	<form action="editpro.php" method="post">
		<div class="form-group">
			<label>Id</label>
			<input type="text" class="form-control" value="<?php echo $data['id'];?>" readonly>
		</div>
		<div class="form-group">
			<label>Nama</label>
			<input type="text" name="nama" class="form-control" value="<?php echo $data['nama'];?>" readonly>
		</div>
		<div class="form-group">
			<label>NIM</label>
			<input type="text" name="kelas" class="form-control" value="<?php echo $data['nim'];?>" readonly>
		</div>
		<div class="form-group">
			<label>Nama Dosen</label>
			<input type="text" name="nama" class="form-control" value="<?php echo $data['nama_dosen'];?>" readonly>
		</div>

		<a href="index.php" class="btn btn-primary">Kembali</a>
	</form>
	</div>	 
	</div>
</div>
</body>
</html>