<?php
session_start();

include "conexiune.php";

// Check if ID parameter is set
if (!isset($_GET['id']) || empty($_GET['id'])) {
    header("Location: /nicolae/admin/index.php");
    exit();
}

$id = $_GET['id'];

// Handle delete
$sql = "DELETE FROM packages WHERE id = ?";
$stmt = $conexiune->prepare($sql);
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    $stmt->close();
    $conexiune->close();
    header("Location: /nicolae/admin/index.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conexiune->error;
}

$stmt->close();
$conexiune->close();
?>
