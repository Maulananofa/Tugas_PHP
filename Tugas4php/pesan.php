<?php 
include_once 'atas.php';

// Data produk outdour beserta harga
$alat_outdour = array(
    "Tenda" => 400000,
    "Sleeping Bag" => 150000,
    "Kursi Outdour" => 650000
);

// Fungsi untuk menghitung total harga berdasarkan pilihan outdour
function hitungTotalHarga($pilih_alat) {
    global $alat_outdour;
    $total_harga = 0;
    foreach ($pilih_alat as $outdour => $jumlah) {
        $total_harga += $alat_outdour[$outdour] * $jumlah;
    }
    return $total_harga;
}

// Inisialisasi variabel pilihan outdour
$pilih_alat = array();

// Proses form jika tombol beli ditekan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['beli']) && isset($_POST['outdour']) && !empty($_POST['outdour'])) {
        $pilih_alat = $_POST['outdour'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Pemesanan outdour</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
    }

    h1 {
      text-align: center;
      margin-top: 50px;
      color: #333;
    }

    form {
      max-width: 400px;
      margin: 0 auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    label {
      font-weight: bold;
    }

    input[type="submit"] {
      display: block;
      width: 100%;
      padding: 10px;
      margin-top: 20px;
      background-color: #007bff;
      border: none;
      color: #fff;
      border-radius: 5px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #0056b3;
    }

    .hasil {
      max-width: 400px;
      margin: 20px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>
<body>

<h1>Pemesanan Alat Outdour</h1>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <div class="form-group">
    <label for="outdour">Pilih Alat Outdour:</label>
    <select class="form-control" name="outdour" id="outdour">
      <option selected disabled>-- Pilih Judul outdour --</option>
      <?php foreach ($alat_outdour as $judul => $harga) { ?>
        <option value="<?php echo $judul; ?>"><?php echo $judul; ?></option>
      <?php } ?>
    </select>
  </div>
  <div class="form-group">
    <label for="jumlah">Jumlah outdour:</label>
    <input type="number" class="form-control" name="jumlah" id="jumlah" min="1" value="1">
  </div>
  <br>
  <input type="submit" name="beli" value="Beli" class="btn btn-primary">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['beli']) && isset($_POST['outdour']) && !empty($_POST['outdour'])) {
        $judul_outdour = $_POST['outdour'];
        $jumlah_outdour = $_POST['jumlah'];
        echo "<div class='hasil'><h2>Total Harga untuk $jumlah_outdour outdour $judul_outdour: Rp " . number_format($alat_outdour[$judul_outdour] * $jumlah_outdour, 0, ',', '.') . "</h2></div>";
    }
}
?>

</body>
</html>

<?php 
include_once 'bawah.php';
?>
