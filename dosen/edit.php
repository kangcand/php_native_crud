<?php
include('/laragon/www/relasi/koneksi.php');
$id 	= $_GET['id'];
$mhs	= mysqli_query($koneksi,"SELECT * FROM dosen WHERE id='$id'");
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
		<center><h2>Edit Data Dosen</h2></center><br>
	<form action="editpro.php" method="post">
	<input type="hidden" name="id" value="<?php echo $data['id'];?>">

		<div class="form-group">
			<label>Nama Dosen</label>
			<input type="text" name="nama" class="form-control" value="<?php echo $data['nama'];?>" required>
		</div>
		<div class="form-group">
			<label>Nomor Induk Pengajar Dosen</label>
			<input type="text" name="nipd" class="form-control" value="<?php echo $data['nipd'];?>" required>
		</div>
		<button type="submit" class="btn btn-primary">Simpan</button>
		<a href="index.php" class="btn btn-primary">Kembali</a>
	</form>
	</div>	 
	</div>
</div>
</body>
</html>