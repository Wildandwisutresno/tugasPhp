<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
</head>
<body>
<h2>Daftar Nilai Mahasiswa</h2>
    <table border="1">
        <tr>
            <th>NO</th>
            <th>NPM</th>
            <th>NAMA MAHASISWA</th>
            <th>NILAI</th>
            <th>KETERANGAN</th>
        </tr>

        <?php
        $Mahasiswa = [
            ["npm" => "001", "nama" => "Wildandwi", "nilai" => 80],
            ["npm" => "002", "nama" => "arasyaqila", "nilai" => 75],
            ["npm" => "003", "nama " => "Ellumino", "nilai" => 50],
            ["npm" => "004", "nama" => "elsam", "nilai" => 90],
            ["npm" => "005", "nama" => "Michael", "nilai" => 50]
        ];

        $no = 1;
        foreach ($Mahasiswa as $mhs) {
            $keterangan = $mhs["nilai"] >= 60 ? "Lulus" : "Tidak Lulus";
            echo "<tr>";
            echo "<td>$no</td>";
            echo "<td>{$mhs['npm']}</td>";
            echo "<td>{$mhs['nama']}</td>";
            echo "<td>{$mhs['nilai']}</td>";
            echo "<td>$keterangan</td>";
            echo "</tr>";
            $no++;  
        }
        ?>
    </table>
    
</body>
</html>