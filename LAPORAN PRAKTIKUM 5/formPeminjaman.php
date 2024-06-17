<?php
require_once 'Model.php';
$loan = null;

if (isset($_GET['id'])) {
    $loan = getPeminjamanById($_GET['id']);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $tgl_pinjam = $_POST['tgl_pinjam'];
    $tgl_kembali = $_POST['tgl_kembali'];

    if ($id) {
        updatePeminjaman($id, $tgl_pinjam, $tgl_kembali);
    } else {
        insertPeminjaman($tgl_pinjam, $tgl_kembali);
    }

    header('Location: Peminjaman.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>Form Peminjaman</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4"><?php echo $loan ? 'Edit' : 'Tambah'; ?> Peminjaman</h1>
        <form method="post">
            <input type="hidden" name="id" value="<?php echo $loan ? $loan['id_peminjaman'] : ''; ?>">
            
            <div class="form-group">
                <label for="tgl_pinjam">Tanggal Pinjam:</label>
                <input type="date" class="form-control" id="tgl_pinjam" name="tgl_pinjam" value="<?php echo $loan ? $loan['tgl_pinjam'] : ''; ?>" required>
            </div>
            
            <div class="form-group">
                <label for="tgl_kembali">Tanggal Kembali:</label>
                <input type="date" class="form-control" id="tgl_kembali" name="tgl_kembali" value="<?php echo $loan ? $loan['tgl_kembali'] : ''; ?>" required>
            </div>
            
            <button type="submit" class="btn btn-primary"><?php echo $loan ? 'Update' : 'Tambah'; ?></button>
        </form>
    </div>
  </body>
</html>

