<?php
require 'Model.php';
$member = null;
if (isset($_GET['id'])) {
    $member = getMemberById($_GET['id']);
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $nomor = $_POST['nomor'];
    $alamat = $_POST['alamat'];
    $tgl_daftar = $_POST['tgl_daftar'];
    $tgl_terakhir_bayar = $_POST['tgl_terakhir_bayar'];

    if ($id) {
        updateMember($id, $nama, $nomor, $alamat, $tgl_daftar, $tgl_terakhir_bayar);
    } else {
        insertMember($nama, $nomor, $alamat, $tgl_daftar, $tgl_terakhir_bayar);
    }
    header('Location: Member.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>Form Member</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4"><?php echo $member ? 'Edit' : 'Tambah'; ?> Member</h1>
        <form method="post">
            <input type="hidden" name="id" value="<?php echo $member ? $member['id_member'] : ''; ?>">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $member ? $member['nama_member'] : ''; ?>" required>
            </div>
            <div class="form-group">
                <label for="nomor">Nomor:</label>
                <input type="text" class="form-control" id="nomor" name="nomor" value="<?php echo $member ? $member['nomor_member'] : ''; ?>" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $member ? $member['alamat'] : ''; ?>" required>
            </div>
            <div class="form-group">
                <label for="tgl_daftar">Tanggal Daftar:</label>
                <input type="date" class="form-control" id="tgl_daftar" name="tgl_daftar" value="<?php echo $member ? $member['tgl_mendaftar'] : ''; ?>" required>
            </div>
            <div class="form-group">
                <label for="tgl_terakhir_bayar">Tanggal Terakhir Bayar:</label>
                <input type="date" class="form-control" id="tgl_terakhir_bayar" name="tgl_terakhir_bayar" value="<?php echo $member ? $member['tgl_terakhir_bayar'] : ''; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary"><?php echo $member ? 'Update' : 'Tambah'; ?></button>
        </form>
    </div>
 </body>
</html>
