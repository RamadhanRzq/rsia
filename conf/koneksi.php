<?php
// Konfigurasi database
$host = "192.168.155.3"; // Host database
$user = "humas"; // Username database
$password = "12345678"; // Password database
$dbname = "landingpage"; // Nama database

// Membuat koneksi
$koneksi = new mysqli($host, $user, $password, $dbname);

// Periksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
//echo "Koneksi berhasil!";
?>