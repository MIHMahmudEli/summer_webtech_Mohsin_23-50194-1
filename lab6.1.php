<!-- find Sum of the elements of an array -->
<?php
function sumArray($arr) {
    $sum = 0;
    foreach ($arr as $value) {
        $sum += $value;
    }
    return $sum;
}

echo sumArray([1, 2, 3, 4, 5]);
?>

