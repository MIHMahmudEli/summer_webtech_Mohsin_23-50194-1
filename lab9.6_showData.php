<?php
require_once 'lab9.2_db.php';

$conn = mysqli_connect("localhost", "root", "", "testdb");

$sql = "SELECT id, name, email FROM Users";
$result = mysqli_query($conn, $sql);
?>
<html>
<head>
    <title>Show Data</title>
    <link rel="stylesheet" href="lab9.9showData.css">
</head>
<body>
<div class="container">
    <h2>Users Data</h2>
    <div class="data-list">
        <?php
        if (mysqli_num_rows($result) > 0) {
            echo '<table class="classic-table">';
            echo '<tr><th>ID</th><th>Name</th><th>Email</th></tr>';
            while($row = mysqli_fetch_assoc($result)) {
                echo '<tr>';
                echo '<td>' . htmlspecialchars($row["id"]) . '</td>';
                echo '<td>' . htmlspecialchars($row["name"]) . '</td>';
                echo '<td>' . htmlspecialchars($row["email"]) . '</td>';
                echo '</tr>';
            }
            echo '</table>';
        } else {
            echo "<span>0 results</span>";
        }
        ?>
    </div>
    <h2>Delete Data</h2>
    <form action="lab9.7_deleteData.php" method="post">
        ID to delete: <input type="number" name="id" required>
        <input type="submit" value="Delete">
    </form>
    <h2>Update Data</h2>
    <form action="lab9.8_updateData.php" method="post">
        ID to update: <input type="number" name="id" required><br>
        New Name: <input type="text" name="name" required><br>
        New Email: <input type="email" name="email" required><br>
        <input type="submit" value="Update">
    </form>
    <a href="lab9.4_index.html">Back to Registration</a>
    
</div>
</body>
</html>