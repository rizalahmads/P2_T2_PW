<?php
    // Soal 2
    // Membuat segitiga siku-siku  dengan bintang (*)
    $tinggi = 5;
    for ($i = 1; $i <= $tinggi; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }
    echo "<br>";
    // Membuat segitiga siku-siku dengan bintang (*) terbalik
    $tinggi = 5;
    for ($i = 1; $i <= $tinggi; $i++) {
        for ($j = $tinggi; $j >= $i; $j--) {
            echo "*";
        }
        echo "<br>";
    }
    echo "<br>";
    // Membuat segitiga siku-siku dengan angka
    $tinggi = 5;
    for ($i = 1; $i <= $tinggi; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $j;
        }
        echo "<br>";
    }
    echo "<br>";
    // Membuat segitiga siku-siku dengan angka terbalik
    $tinggi = 5;
    for ($i = 1; $i <= $tinggi; $i++) {
        for ($j = $tinggi; $j >= $i; $j--) {
            echo $j;
        }
        echo "<br>";
    }
?>