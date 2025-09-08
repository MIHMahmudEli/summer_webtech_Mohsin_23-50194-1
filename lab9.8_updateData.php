<?php
require_once 'lab9.2_db.php';
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$id = intval($_POST['id']);

if (empty($name) || empty($email)) {
    echo "Name and email are required.";
} 
else {
    $stmt = $conn->prepare("UPDATE Users SET name = ?, email = ? WHERE id = ?");
    $stmt->bind_param("ssi", $name, $email, $id);

    if ($stmt->execute()) {
        header("Location: lab9.6_showData.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
?>