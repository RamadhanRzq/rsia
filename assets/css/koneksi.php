<?php
// Sertakan file library Mikrotik
require_once 'routeros_api.class.php';

// Konfigurasi Mikrotik
$ip = '192.168.88.1'; // IP Mikrotik
$username = 'admin';  // Username Mikrotik
$password = '';       // Password Mikrotik
$port = 8728;         // Port API (default: 8728)

// Buat instance RouterOS API
$API = new RouterosAPI();

// Aktifkan debug (opsional, untuk pengujian)
// $API->debug = true;

// Koneksi ke Mikrotik
if ($API->connect($ip, $username, $password, $port)) {
    echo "Koneksi berhasil!<br>";

    // Contoh mengambil daftar interface
    $interfaces = $API->comm('/interface/print');
    echo "Daftar interface:<br>";
    foreach ($interfaces as $interface) {
        echo "Nama: " . $interface['name'] . "<br>";
    }

    // Putuskan koneksi
    $API->disconnect();
} else {
    echo "Koneksi gagal. Periksa konfigurasi dan akses API Mikrotik.";
}
?>
