<!-- Reverse a string -->
<?php
function reverseString($str) {
    $reversed = '';
    for ($i = strlen($str) - 1; $i >= 0; $i--) {
        for ($j = 0; $j < 1; $j++) {
            $reversed[$j]= $str[$i];
            echo $reversed[$j];
        }
    }
}
reverseString("Mohsin Eli");
?>