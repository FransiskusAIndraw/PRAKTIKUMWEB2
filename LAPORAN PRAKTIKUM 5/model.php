<?php
require 'koneksi.php';

function insertMember($nama, $nomor, $alamat, $tgl_daftar, $tgl_terakhir_bayar) {
    $conn = getConnection();
    $sql = "INSERT INTO member (nama_member, nomor_member, alamat, tgl_mendaftar, tgl_terakhir_bayar) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    return $stmt->execute([$nama, $nomor, $alamat, $tgl_daftar, $tgl_terakhir_bayar]);
}

function updateMember($id, $nama, $nomor, $alamat, $tgl_daftar, $tgl_terakhir_bayar) {
    $conn = getConnection();
    $sql = "UPDATE member SET nama_member = ?, nomor_member = ?, alamat = ?, tgl_mendaftar = ?, tgl_terakhir_bayar = ? WHERE id_member = ?";
    $stmt = $conn->prepare($sql);
    return $stmt->execute([$nama, $nomor, $alamat, $tgl_daftar, $tgl_terakhir_bayar, $id]);
}

function deleteMember($id) {
    $conn = getConnection();
    $sql = "DELETE FROM member WHERE id_member = ?";
    $stmt = $conn->prepare($sql);
    return $stmt->execute([$id]);
}

function getMembers() {
    $conn = getConnection();
    $sql = "SELECT * FROM member";
    $stmt = $conn->query($sql);
    return $stmt->fetchAll();
}

function getMemberById($id) {
    $conn = getConnection();
    $sql = "SELECT * FROM member WHERE id_member = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id]);
    return $stmt->fetch();
}

//book
function insertBook($judul, $penulis, $penerbit, $tahun_penerbit){
    $conn = getConnection();
    $sql = "INSERT INTO buku (judul_buku, penulis, penerbit, tahun_penerbit) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    return $stmt->execute([$judul, $penulis, $penerbit, $tahun_penerbit]);
}

function updateBook($id_buku, $judul, $penulis, $penerbit, $tahun_penerbit) {
    $conn = getConnection();
    $sql = "UPDATE buku SET judul_buku = ?, penulis = ?, penerbit = ?, tahun_penerbit = ? WHERE id_buku = ?";
    $stmt = $conn->prepare($sql);
    return $stmt->execute([$judul, $penulis, $penerbit, $tahun_penerbit, $id_buku]);
}

function deleteBook($id) {
    $conn = getConnection();
    $sql = "DELETE FROM buku WHERE id_buku = ?";
    $stmt = $conn->prepare($sql);
    return $stmt->execute([$id]);
}

function getBook() {
    $conn = getConnection();
    $sql = "SELECT * FROM buku";
    $stmt = $conn->query($sql);
    return $stmt->fetchAll();
}

function getBookById($id) {
    $conn = getConnection();
    $sql = "SELECT * FROM book WHERE id_buku = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id]);
    return $stmt->fetch();
}

//ppeminjaman
function insertPeminjaman($tgl_pinjam, $tgl_kembali) {
    $conn = getConnection();
    $sql = "INSERT INTO peminjaman (tgl_pinjam, tgl_kembali) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    return $stmt->execute([$tgl_pinjam, $tgl_kembali,]);
}

function updatePeminjaman($id_peminjaman, $tgl_pinjam, $tgl_kembali) {
    $conn = getConnection();
    $sql = "UPDATE peminjaman SET tgl_pinjam = ?, tgl_kembali = ? WHERE id_peminjaman = ?";
    $stmt = $conn->prepare($sql);
    return $stmt->execute([$tgl_pinjam, $tgl_kembali, $id_peminjaman]);
}

function deletePeminjaman($id) {
    $conn = getConnection();
    $sql = "DELETE FROM peminjaman WHERE id_peminjaman = ?";
    $stmt = $conn->prepare($sql);
    return $stmt->execute([$id]);
}

function getPeminjaman() {
    $conn = getConnection();
    $sql = "SELECT * FROM peminjaman";
    $stmt = $conn->query($sql);
    return $stmt->fetchAll();
}

function getPeminjamanById($id) {
    $conn = getConnection();
    $sql = "SELECT * FROM member WHERE id_member = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id]);
    return $stmt->fetch();
}

?>
