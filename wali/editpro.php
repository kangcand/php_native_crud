<?php
include ('/laragon/www/relasi/koneksi.php');

$id = $_POST['id'];
$nama		= $_POST['nama_wali'];
$tambah = "UPDATE wali SET nama='$nama' where id = '$id'";
mysqli_query($koneksi,$tambah);
header("location:index.php");
?>