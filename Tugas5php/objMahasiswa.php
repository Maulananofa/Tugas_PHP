<!DOCTYPE html>
<html>
<head>
    <title>Form Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 20px;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 0 auto;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        select {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            background-image: url('data:image/svg+xml;utf8,<svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill="none" d="M7 7l3-3 3 3m0 6l-3 3-3-3" stroke="%23333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>');
            background-repeat: no-repeat;
            background-position: right 10px top 50%;
            background-size: 20px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 15px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        table {
            margin-top: 20px;
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        NIM: <input type="text" name="nim"><br>
        Nama: <input type="text" name="nama"><br>
        Kuliah: 
        <select name="kuliah">
            <option value="">--Pilih Universitas--</option>
            <option value="Universitas Muria Kudus">Universitas Muria Kudus</option>
            <option value="Universitas Nahdlatut ulama Jepara">Universitas Nahdlatut ulama Jepara</option>
            <option value="Universitas Muhammadiyah Kudus">Universitas Muhammadiyah Kudus</option>
        </select><br>
        Mata Kuliah: 
        <select name="matkul">
            <option value="">Pilih Mata Kuliah</option>
            <option value="PHP">PHP</option>
            <option value="LARAVEL">LARAVEL</option>
            <option value="JAVASCRIPT">JAVASCRIPT</option>
            <option value="MOBILE">JURUS NINJA</option>
        </select><br>
        Nilai: <input type="text" name="nilai"><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once 'Mahasiswa.php';

        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $kuliah = $_POST['kuliah'];
        $matkul = $_POST['matkul']; 
        $nilai = $_POST['nilai'];

        $mahasiswa = new Mahasiswa($nim, $nama, $kuliah, $matkul, $nilai);

        echo "<table>";
        echo "<tr><th>NIM</th><th>Nama</th><th>Kuliah</th><th>Mata Kuliah</th><th>Nilai</th><th>Grade</th><th>Predikat</th><th>Status</th></tr>";
        echo "<tr>";
        echo "<td>".$mahasiswa->nim."</td>";
        echo "<td>".$mahasiswa->nama."</td>";
        echo "<td>".$mahasiswa->kuliah."</td>";
        echo "<td>".$matkul."</td>"; 
        echo "<td>".$mahasiswa->nilai."</td>";
        echo "<td>".$mahasiswa->grade."</td>";
        echo "<td>".$mahasiswa->predikat."</td>";
        echo "<td>".$mahasiswa->status."</td>";
        echo "</tr>";
        echo "</table>";
    }
    ?>
</body>
</html>
