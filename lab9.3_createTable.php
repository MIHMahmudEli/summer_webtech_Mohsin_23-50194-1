<?php
require_once 'lab9.2_db.php';

$conn = mysqli_connect("localhost", "root", "", "testdb"); 
 
$sql = "CREATE TABLE Users ( 
    id INT AUTO_INCREMENT PRIMARY KEY, 
    name VARCHAR(50) NOT NULL, 
    email VARCHAR(50) NOT NULL
)"; 
 
if (mysqli_query($conn, $sql)) { 
    echo "Table created successfully!"; 
} else { 
    echo "Error: " . mysqli_error($conn); 
} 
?> 