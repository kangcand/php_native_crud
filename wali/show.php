<?php
include('/laragon/www/relasi/koneksi.php');
$id 	= $_GET['id'];
// $wali	= mysqli_query($koneksi,"SELECT wali.id, wali.nama, wali.id_mahasiswa, mahasiswa.nama as nama_mhs
// 	FROM wali JOIN mahasiswa on mahasiswa.id=wali.id_mahasiswa WHERE wali.id = $id");
$wali = mysqli_query($koneksi,"SELECT * FROM wali WHERE id='$id'");
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
		<center><h2>Show Data Wali</h2></center><br>
	<form action="editpro.php" method="post">
	<div class="form-group">
	<label>Id</label>
	<input type="text" class="form-control" name="id" value="<?php echo $data['id'];?>" readonly>
	</div>
		<div class="form-group">
			<label>Nama Wali</label>
			<input type="text" name="nama_wali" class="form-control" value="<?php echo $data['nama'];?>" readonly>
		</div>
		<?php
		   include ('/laragon/www/relasi/koneksi.php');
		   $id = $_GET['id'];
		   $wali = mysqli_query($koneksi, "SELECT mahasiswa.id as id_mhs, mahasiswa.nama as nama_mhs FROM mahasiswa JOIN wali ON mahasiswa.id_wali = wali.id WHERE wali.id ='$id' order by wali.id");
		   $b = mysqli_fetch_array($wali);
		?>
		<div class="form-group">
			<label>Nama Mahasiswa</label>
			<textarea class="form-control" rows="10" value="<?php echo $b['id_mhs'];?>" readonly>
		<?php
		foreach($wali as $a){
			echo "- " .$a['nama_mhs']."\n";} ?></textarea>
		</div>
		</div>

		<button type="submit" class="btn btn-primary">Simpan</button>
		<a href="index.php" class="btn btn-primary">Kembali</a>
	</form>
	</div>	 
	</div>
</div>
</body>
</html>