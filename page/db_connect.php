<?php
$host = "localhost"; // Nama host, biasanya localhost
$username = "root"; // Username MySQL
$password = ""; // Password MySQL
$dbname = "shield_db"; // Nama database Anda

// Membuat koneksi
$conn = new mysqli($host, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>