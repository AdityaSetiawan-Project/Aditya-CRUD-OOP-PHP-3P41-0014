<?php
include 'database.php';
session_start(); // Mulai session
$db = new Database();

$aksi = $_GET['aksi'];

if ($aksi == "tambah") {
    $db->tambahData($_POST['nama'], $_POST['alamat'], $_POST['nohp'], $_POST['gender']);
    $_SESSION['message'] = "Data berhasil ditambahkan!";
    $_SESSION['msg_type'] = "danger";
    header("Location:index.php?status=success");
} elseif ($aksi == "update") {
    $db->updateData($_POST['id'], $_POST['nama'], $_POST['alamat'], $_POST['nohp'], $_POST['gender']);
    $_SESSION['message'] = "Data berhasil diedit!";
    $_SESSION['msg_type'] = "success";
    header("Location:index.php?status=success");
} elseif ($aksi == "hapus") {
    $db->hapusData($_GET['id']);
    $_SESSION['message'] = "Data berhasil dihapus!";
    $_SESSION['msg_type'] = "danger";
    header("Location: index.php");
}
?>
