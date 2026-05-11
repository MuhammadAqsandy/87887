<?php
include 'koneksi.php';

$data = json_decode(file_get_contents("php://input"), true);

$nama = $data['nama_usaha'];
$kategori = $data['kategori'];
$lat = $data['latitude'];
$lng = $data['longitude'];
$kontak = $data['kontak'];
$alamat = $data['alamat'];

$sql = "INSERT INTO umkm (nama_usaha, kategori, latitude, longitude, kontak, alamat)
VALUES ('$nama', '$kategori', '$lat', '$lng', '$kontak', '$alamat')";

if ($conn->query($sql) === TRUE) {
    echo json_encode(["message" => "Data berhasil ditambahkan"]);
} else {
    echo json_encode(["error" => $conn->error]);
}
?>