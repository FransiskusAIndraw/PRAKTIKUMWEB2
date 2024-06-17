<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
        table {
            border-collapse: collapse; 
            width: 5}
        td, th {
            border: 1px solid black; 
          text-align: center;}
</style>
<body>
    <?php 
    if (isset($_POST["cetak"])){
$isi = explode(" ", $_POST["values"]);
$panjangNilai = count($isi);
    $panjang = $_POST["rows"];
    $lebar = $_POST["cols"];
        if ($panjang * $lebar == $panjangNilai) {
            $count = 0;
            for ($i=0; $i < $panjang; $i++) { 
                for ($j=0; $j < $lebar ; $j++) { 
                    $tampil[$i][$j] = $isi[$count];
                    $count++;}}
            echo "<table border= 1>";
            for ($i=0; $i < $panjang; $i++) { 
                echo "<tr>";
                for ($j=0; $j < $lebar; $j++) { 
                    echo "<td>".$tampil[$i][$j]."</td>";}
                echo "</tr>";}
            "</table>";
        } else {
            echo "Panjang nilai tidak sesuai dengan ukuran matris";}}      
        ?>
        <form method="POST">
               Panjang: <input type="number" id="rows" name="rows" required> <br>
               Lebar  : <input type="number" id="cols" name="cols" required> <br>
               Nilai  : <input type="text" id="values" name="values" required><br>
                <button type="submit" name="cetak" >Cetak</button> <br>
        </form>
</body>
</html>
