<?php
// Konfigurasi database
$host = "localhost"; // Host database
$user = "rsi"; // Username database
$password = "12345678"; // Password database
$dbname = "humas"; // Nama database

// Membuat koneksi
$conn = new mysqli($host, $user, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
echo "Koneksi berhasil!";
?>