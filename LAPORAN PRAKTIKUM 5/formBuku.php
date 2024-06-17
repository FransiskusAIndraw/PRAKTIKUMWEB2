<?php
require_once 'model.php';
$book = null;

if (isset($_GET['id'])) {
    $book = getBookById($_GET['id']);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahun_terbit = $_POST['tahun_terbit'];

    if ($id) {
        updateBook($id, $judul, $penulis, $penerbit, $tahun_terbit);
    } else {
        insertBook($judul, $penulis, $penerbit, $tahun_terbit);
    }

    header('Location: buku.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>Form Buku</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4"><?php echo $book ? 'Edit' : 'Tambah'; ?> Buku</h1>
        <form method="post">
            <input type="hidden" name="id" value="<?php echo $book ? $book['id_buku'] : ''; ?>">
            
            <div class="form-group">
                <label for="judul">Judul:</label>
                <input type="text" class="form-control" id="judul" name="judul" value="<?php echo $book ? $book['judul_buku'] : ''; ?>" required>
            </div>
            
            <div class="form-group">
                <label for="penulis">Penulis:</label>
                <input type="text" class="form-control" id="penulis" name="penulis" value="<?php echo $book ? $book['penulis'] : ''; ?>" required>
            </div>
            
            <div class="form-group">
                <label for="penerbit">Penerbit:</label>
                <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?php echo $book ? $book['penerbit'] : ''; ?>" required>
            </div>
            
            <div class="form-group">
                <label for="tahun_terbit">Tahun Terbit:</label>
                <input type="number" class="form-control" id="tahun_terbit" name="tahun_terbit" value="<?php echo $book ? $book['tahun_terbit'] : ''; ?>" required>
            </div>
            
            <button type="submit" class="btn btn-primary"><?php echo $book ? 'Update' : 'Tambah'; ?></button>
        </form>
    </div>
  </body>
</html>
