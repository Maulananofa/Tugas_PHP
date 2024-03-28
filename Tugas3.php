<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Nilai Mahasiswa</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
        }
        .container {
            width: 70%;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
            color: #555;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }
        tfoot {
            font-weight: bold;
        }
        tr,td{
            text-align: center;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Data Nilai Mahasiswa</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Nilai</th>
                <th>Grade</th>
                <th>Predikat</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $nilai_mahasiswa = [
                    ['nim' => '123456', 'nama' => 'Rio', 'nilai' => 90],
                    ['nim' => '234567', 'nama' => 'Yoga', 'nilai' => 89],
                    ['nim' => '345678', 'nama' => 'Riski', 'nilai' => 76],
                    ['nim' => '456789', 'nama' => 'Bayu', 'nilai' => 60],
                    ['nim' => '567890', 'nama' => 'Agus', 'nilai' => 80],
                    ['nim' => '678901', 'nama' => 'David', 'nilai' => 55],
                    ['nim' => '789012', 'nama' => 'Ricky', 'nilai' => 73],
                    ['nim' => '890123', 'nama' => 'Indah', 'nilai' => 90],
                    ['nim' => '901234', 'nama' => 'Nabila', 'nilai' => 92],
                    ['nim' => '012345', 'nama' => 'Bilqis', 'nilai' => 83]
                ];

                function hitungGrade($nilai) {
                    if ($nilai >= 90) {
                        return 'A';
                    } elseif ($nilai >= 80) {
                        return 'B';
                    } elseif ($nilai >= 70) {
                        return 'C';
                    } elseif ($nilai >= 60) {
                        return 'D';
                    } else {
                        return 'E';
                    }
                }

                function hitungPredikat($grade) {
                    switch ($grade) {
                        case 'A':
                            return 'Memuaskan';
                            break;
                        case 'B':
                            return 'Bagus';
                            break;
                        case 'C':
                            return 'Cukup';
                            break;
                        case 'D':
                            return 'Kurang';
                            break;
                        case 'E':
                            return 'Buruk';
                            break;
                        default:
                            return 'Tidak Valid';
                    }
                }

                $nilai_tertinggi = max(array_column($nilai_mahasiswa, 'nilai'));
                $nilai_terendah = min(array_column($nilai_mahasiswa, 'nilai'));
                $total_nilai = array_sum(array_column($nilai_mahasiswa, 'nilai'));
                $jumlah_mahasiswa = count($nilai_mahasiswa);
                
                foreach ($nilai_mahasiswa as $key => $mahasiswa) {
                    $nomor = $key + 1;
                    $nim = $mahasiswa['nim'];
                    $nama = $mahasiswa['nama'];
                    $nilai = $mahasiswa['nilai'];
                    $grade = hitungGrade($nilai);       
                    $predikat = hitungPredikat($grade);
                    $keterangan = ($grade == 'E') ? 'Tidak Lulus' : 'Lulus';

                    echo "<tr><td>$nomor</td><td>$nim</td><td>$nama</td><td>$nilai</td><td>$grade</td><td>$predikat</td><td>$keterangan</td></tr>";
                }
            ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3">Nilai Tertinggi </td>
                <td colspan="4"><?php echo $nilai_tertinggi; ?></td>
            </tr>
            <tr>
                <td colspan="3">Nilai Terendah </td>
                <td colspan="4"><?php echo $nilai_terendah; ?></td>
            </tr>
            <tr>
                <td colspan="3">Nilai Rata-rata </td>
                <td colspan="4"><?php echo round($total_nilai / $jumlah_mahasiswa, 2); ?></td>
            </tr>
            <tr>
                <td colspan="3">Jumlah Mahasiswa </td>
                <td colspan="4"><?php echo $jumlah_mahasiswa; ?></td>
            </tr>
            <tr>
                <td colspan="3">Jumlah Keseluruhan Nilai </td>
                <td colspan="4"><?php echo $total_nilai; ?></td>
            </tr>
        </tfoot>
    </table>
</div>

</body>
</html>

