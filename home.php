<?php
  include"koneksi.php";
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>home</title>

  <!-- Bootstrap -->
  <link href="style/bootstrap.min.css" rel="stylesheet">
</head>

<body>

  <div class="container">

    <?php
      include 'header.php';
     ?>

    <div>
      <a class="btn btn-success" href="tambah.php">Tambah</a>
    </div>
    <br>

    <div class="table-responsive">
      <table class="table">
        <tr>
          <th>kode barang</th>
          <th>nama barang</th>
          <th>harga satuan</th>
          <th>jumlah barang</th>
          <th>total bayar</th>
          <th>keterangan</th>
        </tr>
        <?php
        $data = mysqli_query ($koneksi, " SELECT
                              kode,
                              nama,
                              satuan,
                              banyak,
                              jumlah
                            from
                            barang
                            order by kode ASC");
          while ($isi = mysqli_fetch_array ($data))
          {
         ?>
        <tr>
          <td><?php echo $isi['kode']; ?></td>
          <td><?php echo $isi['nama']; ?></td>
          <td><?php echo $isi['satuan']; ?></td>
          <td><?php echo $isi['banyak']; ?></td>
          <td><?php echo $isi['jumlah'];?></td>
          <td>
						<a class="btn btn-info" href="detail.php?id=<?php echo $isi['kode']; ?>">Detail</a>
						<a class="btn btn-success" href="edit.php?id=<?php echo $isi['kode']; ?>">Edit</a>
						<a class="btn btn-danger" href="hapus.php?id=<?php echo $isi['kode']; ?>" onclick="javascript: return confirm('anda yakin mau menghapus') ">Hapus</a>
					</td>
        </tr>

        <?php
      }
         ?>
      </table>
    </div>
  </div>
<?php
  include 'footer.php';
 ?>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
</body>
<?php mysqli_close($koneksi); ?>
</html>
