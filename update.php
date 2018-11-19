<?php
include"koneksi.php";



$id = $_POST['kode'];
$nama = $_POST['nama'];
$satuan = $_POST['satuan'];
$banyak = $_POST['banyak'];
$jumlah = $_POST['jumlah'];




$query = "UPDATE barang SET
								nama = '$nama',
								satuan= '$satuan',
								banyak= '$banyak',
								jumlah = '$jumlah'
								where kode= '$id'
								";

mysqli_query($koneksi, $query)
or die ("Gagal Perintah SQL".mysql_error());
header('location:home.php');

mysqli_close($koneksi);
?>
