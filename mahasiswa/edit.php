<?php
include('/laragon/www/relasi/koneksi.php');
$id 	= $_GET['id'];
$mhs	= mysqli_query($koneksi,"SELECT * FROM mahasiswa WHERE id='$id'");
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
		<center><h2>Edit Data Mahasiswa</h2></center><br>
	<form action="editpro.php" method="post">
	<input type="hidden" name="id" value="<?php echo $data['id'];?>">

		<div class="form-group">
			<label>Nama</label>
			<input type="text" name="nama" class="form-control" value="<?php echo $data['nama'];?>">
		</div>
		<div class="form-group">
			<label>NIM</label>
			<input type="text" name="nim" class="form-control" value="<?php echo $data['nim'];?>">
		</div>
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
		<button type="submit" class="btn btn-primary">Simpan</button>
		<a href="index.php" class="btn btn-primary">Kembali</a>
	</form>
	</div>	 
	</div>
</div>
</body>
</html>