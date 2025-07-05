<?php
include 'koneksi.php';

$sql = "SELECT * FROM produksi ORDER BY tanggal DESC";
$result = $conn->query($sql);

$data = [];
while ($row = $result->fetch_assoc()) {
  $data[] = $row;
}

header('Content-Type: application/json');
echo json_encode($data);
$conn->close();
?>
