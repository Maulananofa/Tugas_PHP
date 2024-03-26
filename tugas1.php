<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Saya</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: aqua;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: lightcoral;
        }
        img {
            display: block;
            margin: 0 auto;
            border-radius: 10%;
        }
    </style>
</head>
<body>

<div class="container">
    <?php
    // Data profil
    $nama = "Maulana Nofa Karisma";
    $ttl= "11 Mei 2003";
    $jk ="Laki-Laki";
    $email = "202151087@std.umk.ac.id";
    $telepon = "089672515020";
    $alamat = "Jambu Timur RT 24/05 ,Mlonggo,Jepara, Jawa Tengah";
    $hobi ="Olahraga";
    $gambar = "https://i.pinimg.com/564x/f4/c7/1e/f4c71ee0e8bf9e8ff5e52e52e65253c3.jpg"; 

    // Menampilkan data profil
    echo "<img src='$gambar' alt='Profil Saya' width='13%'><br>";
    echo "<h1>$nama</h1>";
    echo "<p>Tempat,Tanggal Lahir: $ttl</p>";
    echo "<p>Jenis Kelamin: $jk</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Telepon: $telepon</p>";
    echo "<p>Alamat: $alamat</p>";
    echo "<P>Hobi : $hobi</P>"
    ?>
</div>

</body>
</html>
