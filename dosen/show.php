<?php
include ('/laragon/www/relasi/koneksi.php');
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
		<center><h2>Data Dosen</h2></center><br>
	<form action="editpro.php" method="post">
		<div class="form-group">
			<label>Id</label>
			<input type="text" class="form-control" value="<?php echo $data['id'];?>" readonly>
		</div>
		<div class="form-group">
			<label>Nama Dosen</label>
			<input type="text" name="nama" class="form-control" value="<?php echo $data['nama'];?>" readonly>
		</div>
		<div class="form-group">
			<label>Nomor Induk Pengajar Dosen</label>
			<input type="text" name="nipd" class="form-control" value="<?php echo $data['nipd'];?>" readonly>
		</div>

		<?php
		   include ('/laragon/www/relasi/koneksi.php');
		   $id = $_GET['id'];
		   $dosen = mysqli_query($koneksi, "SELECT mahasiswa.id as id_mhs, mahasiswa.nama as nama_mhs FROM mahasiswa JOIN dosen ON mahasiswa.id_dosen = dosen.id WHERE dosen.id = '$id' order by dosen.id");
		   $b = mysqli_fetch_array($dosen);
		?>

		<div class="form-group">
		<label>Nama-Nama Mahasiswa</label>
		<textarea class="form-control" rows="10" value="<?php echo $b['id_mhs'];?>" readonly>
		<?php
		foreach($dosen as $a){
			echo "- " .$a['nama_mhs']."\n";} ?></textarea>
		</div>
		<a href="index.php" class="btn btn-primary">Kembali</a>
	</form>
	</div>	 
	</div>
</div>
</body>
</html>