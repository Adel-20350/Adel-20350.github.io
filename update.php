<?php
require_once 'Mahasiswa.php';

$mahasiswa = new Mahasiswa();

$id = $_POST['id'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];

$mahasiswa->updateData(
    $id,
    $nama,
    $nim,
    $alamat
);

header("Location: index.php");
?>