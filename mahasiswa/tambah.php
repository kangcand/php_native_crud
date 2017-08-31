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
		<center><h2>Tambah Data Mahasiswa</h2></center><br>
	<form action="tambahpro.php" method="post">
	<div class="form-group">
	<label>Nama Dosen</label>
	<?php
	include ('/laragon/www/relasi/koneksi.php');
	$dosen = mysqli_query($koneksi, "SELECT * FROM dosen");?>
	<select name="id_dosen" class="form-control">
		<?php
		foreach ($dosen as $data) {
		?>
	<option value="<?php echo $data['id'];?>"><?php echo $data['nama']?></option>
	<?php
		}?>
	</select>
	 </div>
	 <div class="form-group">
	<label>Nama Wali</label>
	<?php
	include ('/laragon/www/relasi/koneksi.php');
	$wali = mysqli_query($koneksi, "SELECT * FROM wali");?>
	<select name="id_wali" class="form-control">
		<?php
		foreach ($wali as $data) {
		?>
	<option value="<?php echo $data['id'];?>"><?php echo $data['nama']?></option>
	<?php
		}?>
	</select>
	 </div>
		<div class="form-group">
			<label>Nama Mahasiswa</label>
			<input type="text" name="nama" class="form-control" required>
		</div>
		<div class="form-group">
			<label>NIM</label>
			<input type="text" name="nim" class="form-control" required>
		</div>
		<button type="submit" class="btn btn-primary">Simpan</button>
	</form>
	</div>	 
	</div>
</div>
</body>
</html>