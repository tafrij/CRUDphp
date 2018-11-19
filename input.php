<?php
include"koneksi.php";


$kode = $_POST['kode'];
$nama = $_POST['nama'];
$satuan = $_POST['satuan'];
$banyak = $_POST['banyak'];
$jumlah = $_POST['jumlah'];


$query = "INSERT INTO barang SET
                kode = '$kode',
								nama = '$nama',
								satuan = '$satuan',
								banyak = '$banyak',
								jumlah = '$jumlah'
								";

mysqli_query($koneksi, $query)
or die ("Gagal Perintah SQL".mysql_error());
header('location:home.php');
mysqli_close($koneksi);
?>
