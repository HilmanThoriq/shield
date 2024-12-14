<?php
include 'db_connect.php';

header('Content-Type: application/json');

// Log input data for debugging
error_log("Input data: " . json_encode($_POST));

if (isset($_POST['id_laporan'])) {
    $id_laporan = $_POST['id_laporan'];
    // Log ID to be deleted
    error_log("Deleting id_laporan: " . $id_laporan);

    $sql = "DELETE FROM data_aduan WHERE id_laporan = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id_laporan);
    
    if ($stmt->execute()) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'error' => $stmt->error]);
    }
    
    $stmt->close();
} else {
    echo json_encode(['success' => false, 'error' => 'Invalid request']);
}

$conn->close();
?>
