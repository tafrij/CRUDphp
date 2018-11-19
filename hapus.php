<?php
include"koneksi.php";

$query = "DELETE FROM barang
							WHERE kode ='$_GET[id]'
								";

$hasil=mysqli_query($koneksi, $query)
or die ("Gagal Perintah SQL".mysql_error());
header('location:home.php');

mysqli_close($koneksi);
?>
