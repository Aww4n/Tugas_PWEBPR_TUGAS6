<?php
include "model.php";

if (isset($_GET['id_hewan'])) {
    $id_hewan = $_GET["id_hewan"];
    if (Hewan::hapusHewan($id_hewan)) {
        header("Location: index.php");
        exit;
    } else {
        echo "<div class='alert alert-danger'> Data Gagal dihapus.</div>";
    }
}

$data_hewan = Hewan::getAll();

include "view.php";
?>
