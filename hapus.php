<?php
require_once 'Mahasiswa.php';

$mahasiswa = new Mahasiswa();

$id = $_GET['id'];

$mahasiswa->hapusData($id);

header("Location: index.php");
?>