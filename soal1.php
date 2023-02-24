<?php
    // Soal 1
    // Membuat fungsi untuk menghitung nilai akhir
    function hitung_nilai_akhir($uts, $uas, $tugas, $kehadiran) {
  $nilai_akhir = ($uts * 0.3) + ($uas * 0.4) + ($tugas * 0.2) + ($kehadiran * 0.1);
    return $nilai_akhir;
    }

    // Membuat fungsi untuk menghitung grade
    function hitungGrade($nilai_akhir) {
    if ($nilai_akhir >= 85) {
        return 'A';
    }  elseif ($nilai_akhir >= 80) {
        return 'A-';
    } elseif ($nilai_akhir >= 75) {
        return 'B+';
    } elseif ($nilai_akhir >= 70) {
        return 'B';
    } elseif ($nilai_akhir >= 65) {
        return 'B-';
    } elseif ($nilai_akhir >= 60) {
        return 'C'; 
    } elseif ($nilai_akhir >= 50) {
        return 'D';
    } else {
        return 'E';
    }
    }

    // Data komponen penilaian dan bobot presentasenya
    $uts_bobot = 0.3;
    $uas_bobot = 0.4;
    $tugas_bobot = 0.2;
    $kehadiran_bobot = 0.1;

    // Input nilai dari setiap komponen penilaian
    $uts = 85;
    $uas = 90;
    $tugas = 80;
    $kehadiran = 90;

    // Hitung nilai akhir dan grade
    $nilai_akhir = hitung_nilai_akhir($uts, $uas, $tugas, $kehadiran);
    $grade = hitung_grade($nilai_akhir);

    // Tampilkan hasil nilai akhir dan grade
    echo "Nilai Akhir: " . $nilai_akhir . "<br>";
    echo "Grade: " . $grade;
        

?>