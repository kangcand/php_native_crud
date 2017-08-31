<?php
include('/laragon/www/relasi/koneksi.php');
$id 	= $_GET['id'];
$wali	= mysqli_query($koneksi,"SELECT * FROM wali WHERE id='$id'");
$data	= mysqli_fetch_array($wali);
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
		<center><h2>Edit Data Wali</h2></center><br>
	<form action="editpro.php" method="post">
	<input type="hidden" name="id" value="<?php echo $data['id'];?>">

		<div class="form-group">
			<label>Nama Wali</label>
			<input type="text" name="nama_wali" class="form-control" value="<?php echo $data['nama'];?>" required>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary">Simpan</button>
			<a href="index.php" class="btn btn-primary">Kembali</a>
		</div>
	</form>
	</div>	 
	</div>
</div>
</body>
</html>