<?php
require_once 'Mahasiswa.php';

$mahasiswa = new Mahasiswa();

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];

$mahasiswa->tambahData(
    $nama,
    $nim,
    $alamat
    );

header("Location: index.php");
?>