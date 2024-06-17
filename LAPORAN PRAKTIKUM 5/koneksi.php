<?php
function getConnection() {
    $host = 'localhost'; 
    $db = 'laprak5'; 
    $user = 'root'; 
    $pass = ''; 

    try {
        $dsn = "mysql:host=$host;dbname=$db;charset=utf8";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ];
        return new PDO($dsn, $user, $pass, $options);
    } catch (PDOException $e) {
        echo 'Koneksi gagal: ' . $e->getMessage();
        exit();
    }
}
?>
