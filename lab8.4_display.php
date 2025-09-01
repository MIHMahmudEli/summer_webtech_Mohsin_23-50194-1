<html>
<head>
</head>
<body>
<?php
    if (isset($_COOKIE['count'])) {
        echo "<p>You have visited " . $_COOKIE['count'] . " times.</p>";
    } else {
        echo "Cookie has been reset or not initialized.";
    }
?>
<button><a href="lab8.5_actions.php">Refresh Page</a></button>
</body>
</html>

