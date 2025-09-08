<?php
require_once 'lab9.2_db.php';

$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);

if (empty($name) || empty($email)) {
    echo "Name and email are required.";
} else {
    $stmt = $conn->prepare("INSERT INTO Users (name, email) VALUES (?, ?)");
    $stmt->bind_param("ss", $name, $email);

    if ($stmt->execute()) {
        header("Location: lab9.6_showData.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
?>