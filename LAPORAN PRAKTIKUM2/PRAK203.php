<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<form action="" method="POST">
    Nilai: 
    <input type="text" name="input" id="input"> <br>
    Dari: <br>
    <input type="radio" name="dari" value="celsius"<?php if (isset($_POST["dari"]) && $_POST["dari"] == "celsius") echo "checked";?>>Celsius <br>
    <input type="radio" name="dari" value="farenheit"<?php if (isset($_POST["dari"]) && $_POST["dari"] == "farenheit") echo "checked";?>>Farenheit <br>
    <input type="radio" name="dari" value="reamur"<?php if (isset($_POST["dari"]) && $_POST["dari"] == "reamur") echo "checked";?>>Reamur <br>
    <input type="radio" name="dari" value="kelvin"<?php if (isset($_POST["dari"]) && $_POST["dari"] == "kelvin") echo "checked";?>>Kelvin <br>
    Ke: <br>
    <input type="radio" name="ke" value="celsius"<?php if (isset($_POST["ke"]) && $_POST["ke"] == "celsius") echo "checked";?>>Celsius <br>
    <input type="radio" name="ke" value="farenheit"<?php if (isset($_POST["ke"]) && $_POST["ke"] == "farenheit") echo "checked";?>>Farenheit <br>
    <input type="radio" name="ke" value="reamur"<?php if (isset($_POST["ke"]) && $_POST["ke"] == "reamur") echo "checked";?>>Reamur <br>
    <input type="radio" name="ke" value="kelvin"<?php if (isset($_POST["ke"]) && $_POST["ke"] == "kelvin") echo "checked";?>>Kelvin <br>
    <br>
    <button type="submit" name="convert">Konversi</button>
</form>
<?php
if (isset($_POST["convert"]) && !empty($_POST["dari"]) && !empty($_POST["ke"])) {
    $inputTemp = $_POST["input"];
    $dari = $_POST["dari"];
    $ke = $_POST["ke"];
    $result = "";
    switch ($dari) {
        case "celsius":
            switch ($ke) {
                case "celsius":
                    $result = $inputTemp . "&degC";
                    break;
                case "farenheit":
                    $result = (9/5 * $inputTemp) + 32 . "&degF";
                    break;
                case "reamur":
                    $result = 4/5 * $inputTemp . "&degR";
                    break;
                case "kelvin":
                    $result = $inputTemp + 273 . "&degK";
                    break;}
            break;
        case "farenheit":
            switch ($ke) {
                case "celsius":
                    $result = 5/9 * ($inputTemp - 32) . "&degC";
                    break;
                case "farenheit":
                    $result = $inputTemp . "&degF";
                    break;
                case "reamur":
                    $result = 4/9 * ($inputTemp - 32) . "&degR";
                    break;
                case "kelvin":
                    $result = 5/9 * ($inputTemp - 32) + 273 . "&degK";
                    break;}
            break;
        case "reamur":
            switch ($ke) {
                case "celsius":
                    $result = 5/4 * $inputTemp . "&degC";
                    break;
                case "farenheit":
                    $result = (9/4 * $inputTemp) + 32 . "&degF";
                    break;
                case "reamur":
                    $result = $inputTemp . "&degR";
                    break;
                case "kelvin":
                    $result = 5/4 * $inputTemp + 273 . "&degK";
                    break;}
            break;
        case "kelvin":
            switch ($ke) {
                case "celsius":
                    $result = $inputTemp - 273 . "&degC";
                    break;
                case "farenheit":
                    $result = 9/5 * ($inputTemp - 273) + 32 . "&degF";
                    break;
                case "reamur":
                    $result = 4/5 * ($inputTemp - 273) . "&degR";
                    break;
                case "kelvin":
                    $result = $inputTemp . "&degK";
                    break;}
            break;}
    if (!empty($result)) {
        echo "<h1>Hasil Konversi: $result</h1>";    
    } else {
        echo "<h1>Masukkan unit suhu yang valid untuk konversi.</h1>";
    }}?>
</body>
</html>
