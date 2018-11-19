<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>detail data</title>

  <!-- Bootstrap -->
  <link href="style/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div class="container">

    <div class="jumbotron">
      <h1 class="">latihan aja</h1>
    </div>

    <?php
	include"koneksi.php";

	$data = mysqli_query ($koneksi, " SELECT
                                          kode,
                                          nama,
                                          satuan,
                                          banyak,
                                          jumlah
									  from
									  barang
									  where kode = $_GET[id]");
	$isi = mysqli_fetch_array ($data);

?>
		<p>
				<a class="btn btn-success" href="home.php">Kembali</a>
			</p>
			<table class="table table-stripped">
				<tr>
					<td style="width:10%;">
						Nama
					</td>
					<td>
						: <?php echo $isi['nama']; ?>
					</td>
				</tr>
				<tr>
					<td>
						harga satuan
					</td>
					<td>
						: <?php echo $isi['satuan']; ?>
					</td>
				</tr>
				<tr>
					<td>
						jumlah barang
					</td>
					<td>
						: <?php echo $isi['banyak']; ?>
					</td>
				</tr>
        <tr>
					<td>
						jumlah bayar
					</td>
					<td>
						: <?php echo $isi['jumlah']; ?>
					</td>
				</tr>
			</table>

</div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
