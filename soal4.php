<?php
// Soal 4
// Membuat fungsi untuk mengubah angka menjadi terbilang dengan parameter angka
function terbilang($angka) {
    $bilangan = array(
        '', 'satu', 'dua', 'tiga', 'empat', 'lima', 'enam', 'tujuh', 'delapan', 'sembilan', 'sepuluh', 'sebelas'
    );

    if ($angka < 12) {
        return $bilangan[$angka];
    } elseif ($angka < 20) {
        return $bilangan[$angka - 10] . ' belas';
    } elseif ($angka < 100) {
        return $bilangan[floor($angka / 10)] . ' puluh ' . $bilangan[$angka % 10];
    } elseif ($angka < 200) {
        return 'seratus ' . terbilang($angka - 100);
    } elseif ($angka < 1000) {
        return $bilangan[floor($angka / 100)] . ' ratus ' . terbilang($angka % 100);
    } elseif ($angka < 2000) {
        return 'seribu ' . terbilang($angka - 1000);
    } elseif ($angka < 1000000) {
        return terbilang(floor($angka / 1000)) . ' ribu ' . terbilang($angka % 1000);
    } elseif ($angka < 1000000000) {
        return terbilang(floor($angka / 1000000)) . ' juta ' . terbilang($angka % 1000000);
    }
}

$angka = 650;
echo "Bilangan  = " . $angka . "<br>";
echo "Terbilang = " . terbilang($angka);
?>
