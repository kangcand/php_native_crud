<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Dosen</title>
	<script type="text/javascript" src="/relasi/tampilan/js/jquery.js"></script>
	<script type="text/javascript" src="/relasi/tampilan/js/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="/relasi/tampilan/css/bootstrap.css">
</head>
<body>
<div class="container">
	<div class="jumbotron"> 
	<div class="container">
		<center><h2>Tambah Data Dosen</h2></center><br>
	<form action="tambahpro.php" method="post">
		<div class="form-group">
			<label>Nama Dosen</label>
			<input type="text" name="nama" class="form-control" required="">
		</div>
		<div class="form-group">
			<label>Nomor Induk Pengajar Dosen</label>
			<input type="text" name="nipd" class="form-control" required="">
		</div>
		<button type="submit" class="btn btn-primary">Simpan</button>
	</form>
	</div>	 
	</div>
</div>
</body>
</html>