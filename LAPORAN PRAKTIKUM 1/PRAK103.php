<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php 
$celcius = 37.841;
$far = ($celcius * 9/5) + 32;
$ream = ($celcius * 0.8);
$kelv = ($celcius + 273.15);
echo "Farenheit (F): $far<br>";
echo "Reamur (R): $ream<br>";
echo "Kelvin (K): $kelv";
?>
</body>
</html>
