<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = ""; 

$conn = mysqli_connect("localhost", "root", "", ""); 
$sql = "CREATE DATABASE testdb"; 
 
if (mysqli_query($conn, $sql)) { 
    echo "Database created successfully!"; 
} else { 
    echo "Error: " . mysqli_error($conn); 
} 
mysqli_close($conn); 

?>