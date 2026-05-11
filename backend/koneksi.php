<?php
$conn = new mysqli("localhost", "root", "", "sig_umkm");

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>