<?php
// Soal 3
// Membuat fungsi untuk menghitung berapa lama waktu yang dibutuhkan untuk mendapatkan saldo rekening yang sama dengan atau lebih besar dari dua kali lipat dari saldo awal
function doubleMoney($initialBalance, $interestRate) {
    $balance = $initialBalance;
    $years = 0;
    while ($balance < ($initialBalance * 2)) {
        $balance += ($balance * $interestRate);
        $years++;
    }
    return $years;
}

$initialBalance = 10000;
$interestRate = 0.05;
$years = doubleMoney($initialBalance, $interestRate);

echo "Dalam " . $years . " tahun, saldo rekening akan menjadi dua kali lipat dari aslinya. senilai " . $initialBalance * 2 . "";
?>
