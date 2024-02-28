<?php
// tangkap input form
$nama = $_GET['nama'];
$matkul = $_GET['matkul'];
$uts = $_GET['uts'];
$uas = $_GET['uas'];
$tugas = $_GET['tugas'];

// hitung nilai total (30% UTS + 35% UAS + Tugas 35%)
$nilai_total = (30 / 100 * $uts) + (35 / 100 * $uas) + (35 / 100 * $tugas);

if ($nilai_total > 55) {
    $hasil = 'Lulus';
} else {
    $hasil = 'Tidak Lulus';
}

// tampilkan hasil input
echo "Nama Lengkap: $nama";
echo "<br> Mata Kuliah: $matkul";
echo "<br> Nilai UTS: $uts";
echo "<br> Nilai UAS: $uas";
echo "<br> Nilai Tugas: $tugas";
echo "<br> Hasil: : $hasil";
echo "<br> Grade: ";
echo "<br> Predikat: ";
