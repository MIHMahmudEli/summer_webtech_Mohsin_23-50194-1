<?php
// Get inputs safely
$name     = trim($_POST['username'] ?? '');
$email    = trim($_POST['email'] ?? '');
$website  = trim($_POST['aiub'] ?? '');
$comments = trim($_POST['comment'] ?? '');
$gender   = trim($_POST['gender'] ?? '');

$errors = [];

if (empty($name)) {
    $errors[] = "Name is required.";
}

if (empty($email)) {
    $errors[] = "Email is required.";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Invalid email format.";
}

if (empty($gender)) {
    $errors[] = "Gender is required.";
}

if (!empty($website) && !filter_var($website, FILTER_VALIDATE_URL)) {
    $errors[] = "Invalid URL format.";
}

if (!empty($errors)) {
    foreach ($errors as $err) {
        echo "<p style='color:red;'>$err</p>";
    }
} else {
    // Show validated results
    echo "Name: " . htmlspecialchars($name) . "<br>";
    echo "Email: " . htmlspecialchars($email) . "<br>";
    echo "Website: " . htmlspecialchars($website) . "<br>";
    echo "Comments: " . htmlspecialchars($comments) . "<br>";
    echo "Gender: " . htmlspecialchars($gender) . "<br>";
}
?>
