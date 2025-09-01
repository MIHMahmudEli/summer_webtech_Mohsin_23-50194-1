<?php
if (!isset($_COOKIE['count'])) {
    setcookie('count', 1, time() + 3600, '/'); 
} else {
    setcookie('count', $_COOKIE['count'] + 1, time() + 3*3600, '/');
}

header("Location: lab8.4_display.php");
?>