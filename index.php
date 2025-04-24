<?php
$mahasiswa = [
    ["npm" => "001", "nama" => "Wildan", "nilai" => 80],
    ["npm" => "002", "nama" => "Dwi", "nilai" => 75],
    ["npm" => "003", "nama" => "Sutresno", "nilai" => 50],
    ["npm" => "004", "nama" => "Teknik", "nilai" => 90],
    ["npm" => "005", "nama" => "Informatikka", "nilai" => 100],
];

echo "<h2><b>Daftar Nilai Mahasiswa</b></h2>";

echo "<table border='1' cellpadding='5' cellspacing='0' style='border:3px double black'>";
echo "<tr>
        <th>NO</th>
        <th>NPM</th>
        <th>NAMA MAHASISWA</th>
        <th>NILAI</th>
        <th>KETERANGAN</th>
      </tr>";

$no = 1;
foreach ($mahasiswa as $mhs) {
    $keterangan = ($mhs['nilai'] >= 60) ? "Lulus" : "Tidak Lulus";
    echo "<tr>
            <td>$no</td>
            <td>{$mhs['npm']}</td>
            <td>{$mhs['nama']}</td>
            <td>{$mhs['nilai']}</td>
            <td>$keterangan</td>
          </tr>";
    $no++;
}

echo "</table>";
?>