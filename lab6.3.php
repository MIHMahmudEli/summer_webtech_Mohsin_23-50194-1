<!-- Generate a Right-Angled Star Triangle -->
<?php
function rightAngledStarTriangle($n) {
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "* ";
        }
        echo "<br>";
    }
}
rightAngledStarTriangle(5);
?>