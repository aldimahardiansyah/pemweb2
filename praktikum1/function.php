<?php
// membuat function hitung luas segitiga
function luas_segitiga($alas, $tinggi)
{
    $luas = 0.5 * $alas * $tinggi;
    return "Hasil perhitungan luas: $luas";
}

// memanggil function
echo luas_segitiga(5, 8);
