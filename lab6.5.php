<!-- Separate the vowels and consonants of a given word -->
<?php
function separateVowelsAndConsonants($str) {
    $vowels = "";
    $consonants = "";

    for ($i = 0; $i < strlen($str); $i++) {
        $ch = strtolower($str[$i]); 
        if ($ch == "a" || $ch == "e" || $ch == "i" || $ch == "o" || $ch == "u") {
            $vowels .= $str[$i];  
        } else {
            $consonants .= $str[$i];  
        }
    }

    echo "Vowels: " . $vowels . "<br>";
    echo "Consonants: " . $consonants . "<br>";
}

separateVowelsAndConsonants("mohsin");
?>
