<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .error {color: red;}
    </style>
</head>
<?php
$nameError = $nimError = $genderError = "";
$name = $nim = $gender = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameError = "Nama tidak boleh kosong";
    } else {
        $name = input($_POST["name"]);}
    if (empty($_POST["nim"])) {
        $nimError = "NIM tidak boleh kosong";
    } else {
        $nim = input($_POST["nim"]);}
    if (!isset($_POST["gender"])) {
        $genderError = "Jenis kelamin tidak boleh kosong";
    } else {
        $gender = input($_POST["gender"]);
    }}
function input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;}?>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        Nama  : <input type="text" name="name" value="<?php echo $name; ?>"> <span class="error">* <?php echo $nameError; ?></span> <br>
        NIM   : <input type="text" name="nim" value="<?php echo $nim; ?>"> <span class="error">* <?php echo $nimError; ?></span> <br>
        Jenis Kelamin : <span class="error">* <?php echo $genderError; ?></span> <br>
        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "male") echo "checked"; ?> value="Laki-laki">Laki-laki <br>
        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "female") echo "checked"; ?> value="Perempuan">Perempuan <br><br>
        <input type="submit" name="submit">
    </form>
    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($name) && !empty($nim) && !empty($gender)) {
            echo "<h2>Output:</h2>";
            echo " $name <br>";
            echo " $nim <br>";
            echo " $gender <br>";}}?>
</body>
</html>
