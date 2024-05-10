<?php
include "koneksi.php";

class Hewan {
    public static function getAll() {
        global $kon;
        $sql = "SELECT * FROM peserta ORDER BY id_hewan DESC";
        $hasil = mysqli_query($kon, $sql);
        $data = [];
        while ($row = mysqli_fetch_assoc($hasil)) {
            $data[] = $row;
        }
        return $data;
    }

    public static function tambahHewan($nama, $jenis, $gender, $umur, $deskripsi) {
        global $kon;
        $nama = mysqli_real_escape_string($kon, $nama);
        $jenis = mysqli_real_escape_string($kon, $jenis);
        $gender = mysqli_real_escape_string($kon, $gender);
        $umur = mysqli_real_escape_string($kon, $umur);
        $deskripsi = mysqli_real_escape_string($kon, $deskripsi);

        $sql = "INSERT INTO peserta (nama, jenis, gender, umur, deskripsi) VALUES ('$nama', '$jenis', '$gender', '$umur', '$deskripsi')";
        return mysqli_query($kon, $sql);
    }

    public static function hapusHewan($id_hewan) {
        global $kon;
        $id_hewan = mysqli_real_escape_string($kon, $id_hewan);

        $sql = "DELETE FROM peserta WHERE id_hewan='$id_hewan'";
        return mysqli_query($kon, $sql);
    }
}
?>
