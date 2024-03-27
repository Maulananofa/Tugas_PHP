<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    table {
      border-collapse: collapse;
      width: 70%;
      margin: auto;
    }
    th, td {
      padding: 10px;
    }
    thead {
      background-color: yellow;
    }
    tfoot {
      background-color: yellow;
    }
  </style>
</head>
<body>
  <form action="tugas2.php" method="POST">
    <table>
      <thead>
        <tr>
          <td colspan="2" align="center">FORM BELANJA</td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th><label>Nama Pelanggan</label></th>
          <th><input type="text" name="nama" placeholder="Masukkan nama"></th>
        </tr>
        <tr>
          <th><label>Produk Pilihan</label></th>
          <th>
            <select name="produk" id="">
              <option value="">-- Pilih Produk --</option>
              <option value="TV">TV - Rp 4.200.000</option>
              <option value="KULKAS">KULKAS - Rp 3.000.000</option>
              <option value="MESIN">MESIN CUCI - Rp 2.800.000</option>
              <option value="AC">AC - Rp 5.000.000</option>
            </select>
          </th>
        </tr>
        <tr>
          <th><label for="">Jumlah Beli</label></th>
          <th><input type="text" name="jmlhbeli" placeholder="Masukkan jumlah beli"></th>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <td colspan="2" align="center"><input type="submit" name="submit" value="submit"></td>
        </tr>
      </tfoot>
    </table>
  </form>

  <?php
  if(isset($_POST['submit'])){
    $nama_pelanggan = $_POST["nama"];
    $produk = $_POST["produk"];
    $jumlah_beli = $_POST["jmlhbeli"];

    switch ($produk) {
      case "TV":
        $harga_satuan = 4200000;
        break;
      case "KULKAS":
        $harga_satuan = 3000000;
        break;
      case "MESIN":
        $harga_satuan = 2800000;
        break;
      case "AC":
        $harga_satuan = 5000000;
        break;
      default:
        $harga_satuan = 0;
    }

    $total_belanja = $harga_satuan * $jumlah_beli;
    $diskon = $total_belanja * 0.15;
    $ppn = $total_belanja * 0.11;
    $harga_bersih = $total_belanja - $diskon + $ppn;

    echo "<center>";
    echo "<br><br><br>";
    echo "Nama Pelanggan: $nama_pelanggan". "<br>";
    echo "Produk: $produk". "<br>";
    echo "Jumlah Beli: $jumlah_beli". "<br>";
    echo "Harga Satuan: Rp " . number_format($harga_satuan, 0, '', '.'). "<br>" ;
    echo "Total Belanja: Rp " . number_format($total_belanja, 0, '', '.') . "<br>";
    echo "Diskon: Rp " . number_format($diskon, 0, '', '.') . " (-15%)". "<br>";
    echo "PPN: Rp " . number_format($ppn, 0, '', '.') . "(11%)". "<br>";
    echo "Harga Bersih: Rp " . number_format($harga_bersih, 0, '', '.'). "<br>" ;
    echo "</center>";
  }
  ?>
</body>
</html>