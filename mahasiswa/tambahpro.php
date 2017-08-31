<?php
include ('/laragon/www/relasi/koneksi.php');

$id = $_POST['id'];
$nama		= $_POST['nama'];
$nim		= $_POST['nim'];
$id_dosen = $_POST['id_dosen'];
$id_wali = $_POST['id_wali'];
$tambah = "INSERT INTO mahasiswa SET nama='$nama',nim='$nim', id_dosen='$id_dosen', id_wali='$id_wali'";
mysqli_query($koneksi,$tambah);
header("location:index.php");
?>