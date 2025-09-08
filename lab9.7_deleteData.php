<?php
require_once 'lab9.2_db.php';

$id = intval($_POST['id']);
$sql = "DELETE FROM Users WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    header("Location: lab9.6_showData.php");
    exit();
} else {
    echo "Error deleting record: " . $stmt->error;
}
?>