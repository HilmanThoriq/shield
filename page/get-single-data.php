<?php
// Include your database connection
include 'db_connect.php';

if (isset($_GET['id_laporan'])) {
    $id = $_GET['id_laporan'];
    
    // Prepare statement to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM data_aduan WHERE id_laporan = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($row = $result->fetch_assoc()) {
        // Return data as JSON
        echo json_encode($row);
    } else {
        echo json_encode(['error' => 'Data tidak ditemukan']);
    }
    
    $stmt->close();
} else {
    echo json_encode(['error' => 'ID tidak ditemukan']);
}

$conn->close();
?>