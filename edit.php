<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>edit data</title>

  <!-- Bootstrap -->
  <link href="style/bootstrap.min.css" rel="stylesheet">
</head>

<body>
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
                                        where kode= $_GET[id]");
      $isi = mysqli_fetch_array($data);
    ?>
  <div class="container">

    <div class="jumbotron">
      <h1 class="">latihan aja</h1>
    </div>

    <form method="post" action="update.php">
      <div class="form-group">
          <label>nama barang</label>
          <input type="hidden" class="form-control" name="kode" value="<?php echo $isi['kode']; ?>">
          <input class="form-control" name="nama"  value=" <?php echo $isi['nama'] ; ?>">
      </div>
      <div class="form-group">
          <label>harga satuan</label>
          <input class="form-control" name="satuan"  value="<?php echo $isi['satuan'] ; ?>">
      </div>
      <div class="form-group">
          <label>jumalah barang</label>
          <input class="form-control" name="banyak"  value="<?php echo $isi['banyak'] ; ?>">
      </div>
      <div class="form-group">
          <label>jumlah</label>
          <input class="form-control" name="jumlah"  value="<?php echo $isi['jumlah'] ; ?>">
      </div>
      <button type="submit" class="btn btn-success pull-right">Simpan</button>
      <a href="home.php" class="btn btn-danger pull-right" style="margin-right:1%;">Batal</a>
  </form>

</div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
</body>
<?php mysqli_close($koneksi); ?>
</html>
