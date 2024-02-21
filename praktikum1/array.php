<?php
// array indexing
$mhs1 = ['011', 'Aldi', 'Sistem Informasi', [3.5, 3.7, 4.0]];

// panggil array
echo 'Nama: ' . $mhs1[1] . '<br>'; // konkatenasi string
echo "NIM: $mhs1[0] <br>"; // string interpolation
echo "IPS semester 1: " . $mhs1[3][0];
