<?php
include ('/laragon/www/relasi/koneksi.php');

$id         = $_POST['id']; 
$nama		= $_POST['nama'];
$tambah = "INSERT INTO wali SET nama='$nama'";
mysqli_query($koneksi,$tambah);
header("location:index.php");
?>