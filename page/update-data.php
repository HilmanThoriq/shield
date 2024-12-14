<?php
// Include your database connection
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $id_laporan = $_POST['id_laporan'];
    $nama_pelapor = $_POST['nama_pelapor'];
    $jenis_kekerasan = $_POST['jenis_kekerasan'];
    $tgl_kejadian = $_POST['tgl_kejadian'];
    $kecamatan = $_POST['kecamatan_kejadian'];
    $desa = $_POST['desa_kejadian'];
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];
    
    // Prepare statement
    $stmt = $conn->prepare("UPDATE data_aduan SET 
        nama_pelapor = ?,
        jenis_kekerasan = ?,
        tgl_kejadian = ?,
        kecamatan_kejadian = ?,
        desa_kejadian = ?,
        latitude = ?,
        longitude = ?
        WHERE id_laporan = ?");
    
    $stmt->bind_param("sssssssi", 
        $nama_pelapor,
        $jenis_kekerasan,
        $tgl_kejadian,
        $kecamatan,
        $desa,
        $latitude,
        $longitude,
        $id_laporan
    );
    
    if ($stmt->execute()) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'error' => $stmt->error]);
    }
    
    $stmt->close();
} else {
    echo json_encode(['success' => false, 'error' => 'Invalid request method']);
}

$conn->close();
?>
