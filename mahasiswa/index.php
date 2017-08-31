<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width-device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="/relasi/tampilan/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
</head>
<body>
<div class="container">
	<div class="jumbotron">
	<div class="container">
		<center>
			<h2>Data Mahasiswa</h2>
			<a href="tambah.php" class="btn btn-primary">Tambah Data</a><br><br>
		<table class="table table-bordered table-striped">
			<th>Nomor</th>
			<th>Id</th>
			<th>Nama Mahasiswa</th>
			<th>Nomor Induk Mahasiswa</th>
			<th>Nama Dosen</th>
			<th>Nama Wali</th>
			<th colspan="3">Opsi</th>

			<?php
			include('/laragon/www/relasi/koneksi.php');
			$ma = mysqli_query($koneksi,"SELECT mahasiswa.id, mahasiswa.nama, mahasiswa.nim, dosen.nama as nama_dosen, wali.nama as nama_wali FROM mahasiswa 
				JOIN dosen ON dosen.id = mahasiswa.id_dosen
			    join wali on wali.id = mahasiswa.id_wali ");
			$no = 1;
			foreach ($ma as $data) {
				echo "<tr>
				<td>$no</td>
				<td>".$data['id']."</td>
				<td>".$data['nama']."</td>
				<td>".$data['nim']."</td>
				<td>".$data['nama_dosen']."</td>
				<td>".$data['nama_wali']."</td>
				<td><a class='btn btn-primary' href='show.php?id=$data[id]'>Show</a></td>
				<td><a class='btn btn-info' href='edit.php?id=$data[id]'>Edit</a></td>
				<td><a class='btn btn-danger' href='delete.php?id=$data[id]'>Delete</a></td>
				</tr>";
			$no++;
			}
			?>
		</table>
		</center>
	</div>	
	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="/relasi/tampilan/js/bootstrap.min.js"></script>
</body>
</html>