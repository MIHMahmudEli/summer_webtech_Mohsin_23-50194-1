<!-- find 2nd maximum num of the elements of an array -->
<?php
function secondMax($arr) {
    $max = $secondMax = $arr[0];
    foreach ($arr as $value) {
        if ($value > $max) {
            $secondMax = $max;
            $max = $value;
        } elseif ($value > $secondMax && $value < $max) {
            $secondMax = $value;
        }
    }
    return $secondMax;
}

echo "Second Maximun Element of array: " . secondMax([1, 2, 3, 4, 5]);
?>

