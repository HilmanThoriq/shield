<?php

// Sertakan file koneksi
$host = "localhost";
$username = "root";
$password = "";
$dbname = "shield_db";

// Membuat koneksi
$conn = new mysqli($host, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Periksa apakah form telah disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $nama = $_POST['nama_pelapor'];
    $jenis_kejadian = $_POST['jenis_kejadian'];
    $tgl_kejadian = $_POST['tgl_kejadian'];
    $kec_kejadian = $_POST['kec_kejadian'];
    $desa_kejadian = $_POST['desa_kejadian'];
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];
    $detail_aduan = $_POST['detail_aduan'];

    // Query untuk menyimpan data ke database
    $sql = "INSERT INTO data_aduan (nama_pelapor, jenis_kekerasan, tgl_kejadian, kecamatan_kejadian, desa_kejadian, latitude, longitude, detail_aduan)
            VALUES ('$nama', '$jenis_kejadian', '$tgl_kejadian', '$kec_kejadian', '$desa_kejadian', '$latitude', '$longitude', '$detail_aduan')";

    // Eksekusi query
    if ($conn->query($sql) === TRUE) {
        echo 'success'; // Kirim respon sukses
    } else {
        echo 'error'; // Kirim respon error
    }
    // Tutup koneksi
    $conn->close();
}
?>