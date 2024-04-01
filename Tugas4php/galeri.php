<?php 
include_once 'atas.php';

// Daftar URL gambar
$gambar_urls = [
    "https://i.pinimg.com/236x/ff/af/57/ffaf575faad20633a8646f5838f0b783.jpg",
    "https://i.pinimg.com/236x/98/00/b1/9800b1f07e4e8eacc7585c50a0cf7c69.jpg",
    "https://i.pinimg.com/236x/7b/e8/3d/7be83dca59147e1795ed2b7eba9ed4d6.jpg",
    "https://i.pinimg.com/236x/8d/f2/ec/8df2ec67fdd57d84ed88c93201db95ed.jpg",
    "https://i.pinimg.com/236x/26/dc/9b/26dc9bb8295eedf94131041820a1146a.jpg",
    "https://i.pinimg.com/236x/9c/f3/bd/9cf3bd0cb569ee5f713a712faa1c317a.jpg",
    "https://i.pinimg.com/236x/0f/13/45/0f134520d56cc1478584b82716999466.jpg",
    "https://i.pinimg.com/236x/de/12/be/de12bef21427cd834cea7d2d4d33a2ae.jpg",
    
];

?>

<!DOCTYPE HTML>
<html>
<head>
    <title>FOTOKU</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
        }

        .gallery {
            margin: 0 auto;
            width: 80%;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .gallery img {
            width: calc(25% - 20px);
            margin-bottom: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }
    </style>
</head>
<body>
<h1 align="center" id="atas">
    <marquee direction="right" scrolldelay="100">
        Welcome to My Gallery
    </marquee>
</h1>

<div class="gallery">
    <?php foreach ($gambar_urls as $url) { ?>
        <img src="<?php echo $url; ?>" alt="123" />
    <?php } ?>
</div>

</body>
</html>

<?php 
include_once 'bawah.php';
?>
