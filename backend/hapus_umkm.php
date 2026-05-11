<?php
include 'koneksi.php';

$id = $_GET['id'];

$conn->query("DELETE FROM umkm WHERE id_umkm=$id");

echo json_encode(["message" => "Data dihapus"]);
?>