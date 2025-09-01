<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $gender   = $_POST['gender'];
    $country  = $_POST['country'];
    

    if (empty($fullname) || empty($username) || empty($password) || 
        empty($gender) || empty($country)) {
        echo "Enter Valid data";
        exit;
    }

    $_SESSION['fullname'] = $fullname;
    $_SESSION['username'] = $username;
    $_SESSION['gender'] = $gender;
    $_SESSION['country'] = $country;

    header("Location: lab8.3_dashboard.php");
    exit;
} else {
    echo "Invalid Request";
}
?>
