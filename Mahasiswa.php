<?php
require_once 'koneksi.php';

class Mahasiswa extends Database {

    // tampil data
    public function tampilData() {

        $data = $this->koneksi->query(
            "SELECT * FROM mahasiswa"
        );

        return $data;
    }


    // tambah data
    public function tambahData(
        $nama,
        $nim,
        $alamat
    ) {

        $sql = "INSERT INTO mahasiswa
                VALUES (
                NULL,
                '$nama',
                '$nim',
                '$alamat'
                )";

        return $this->koneksi->query($sql);
    }


    // ambil data berdasarkan id
    public function ambilData($id) {

        $sql = "SELECT * FROM mahasiswa
                WHERE id='$id'";

        return $this->koneksi->query($sql);
    }


    // update data
    public function updateData(
        $id,
        $nama,
        $nim,
        $alamat
    ) {

        $sql = "UPDATE mahasiswa SET
                nama='$nama',
                nim='$nim',
                alamat='$alamat'
                WHERE id='$id'";

        return $this->koneksi->query($sql);
    }


    // hapus data
    public function hapusData($id) {

        $sql = "DELETE FROM mahasiswa
                WHERE id='$id'";

        return $this->koneksi->query($sql);
    }

}
?>