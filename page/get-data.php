<?php
include 'db_connect.php';
header('Content-Type: application/json');

$sql = "SELECT * FROM data_aduan ORDER BY id_laporan ASC";
$result = $conn->query($sql);
$data = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

echo json_encode($data);
$conn->close();
?>