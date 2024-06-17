<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
        table, tr, td, th{
        border: 1px solid black; 
          text-align: center;
          border-collapse: collapse; 
             }
</style>
<?php
$nilai = [
    [
    "no" => 1, "nama" => "Ridho", 
    "matkul" => [
        ["nama_mk" => "Pemrograman 1", "sks" => 2],
        ["nama_mk" => "Praktikum Pemrograman 1", "sks" => 1],
        ["nama_mk" => "Pengantar Lingkungan Lahan Basah", "sks" => 2],
        ["nama_mk" => "Arsitektur Komputer", "sks" => 3]
        ]
    ],
    [
        "no" => 2, "nama" => "Ratna",
        "matkul" => [
            ["nama_mk" => "Basis Data 1", "sks" => 2],
            ["nama_mk" => "Praktikum Basis Data 1", "sks" => 1],
            ["nama_mk" => "Kalkulus", "sks" => 3]

            ]
        ],
        [
            "no" => 3, "nama" => "Tono",
            "matkul" => [
                ["nama_mk" => "Rekayasa Perangkat Lunak", "sks" => 3],
                ["nama_mk" => "Analisis dan Perancagan Sistem", "sks" => 3],
                ["nama_mk" => "Komputasi Awan", "sks" => 3],
                ["nama_mk" => "Kecedrasan Bisnis", "sks" => 3]
                ]
            ],  
        ];

        for ($i=0; $i < count($nilai); $i++) { 
            $jumSks = 0;
            for ($j=0; $j < count($nilai[$i]["matkul"]); $j++) { 
                $jumSks += $nilai[$i]["matkul"][$j]["sks"]; 
            }
        $nilai[$i]["jumSks"] = $jumSks;
        if ($nilai[$i]["jumSks"] < 7) {
            $nilai[$i]["keterangan"] = "<div style='background-color: red;'> Revisi KRS </div>";
        } else {
            $nilai[$i]["keterangan"] = "<div style='background-color: #ACD1AF;'> TIdak Revisi KRS </div>";
        }
        }
?>
<body>
<table>
    <tr>
        <td>No</td>
        <td>Nama</td>
        <td>Mata Kuliah diambil</td>
        <td>SKS</td>
        <td>Total SKS</td>
        <td>Keterangan</td>
    </tr>
    <?php
    for ($i=0; $i < count($nilai); $i++) { 
        for ($j=0; $j < count($nilai[$i]["matkul"]); $j++) { 
            echo "<tr>";
            if ($j == 0) {
                echo "<td>" . $nilai[$i]["no"] . "</td>";
                echo "<td>" . $nilai[$i]["nama"] . "</td>";
                echo "<td>" . $nilai[$i]["matkul"][$j]["nama_mk"] . "</td>";
                echo "<td>" . $nilai[$i]["matkul"][$j]["sks"] . "</td>";
                echo "<td>" . $nilai[$i]["jumSks"] . "</td>";
                echo "<td>" . $nilai[$i]["keterangan"] . "</td>";
            } else {
                echo "<td></td>";
                echo "<td></td>";
                echo "<td>" . $nilai[$i]["matkul"][$j]["nama_mk"] . "</td>";
                echo "<td>" . $nilai[$i]["matkul"][$j]["sks"] . "</td>";
                echo "<td></td>";
                echo "<td></td>";
            }
            echo "</tr>";
        }
    }
    ?>
</table>

</body>
</html>
