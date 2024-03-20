<?php
require_once('class_lingkaran.php');
echo "Nilai PHI: " . Lingkaran::PHI;

// instansiasi object lingkaran
$lingkar1 = new Lingkaran(20);
$lingkar2 = new Lingkaran(8);

// memanggil method dari object
echo "<br> Luas Lingkaran 1: " . $lingkar1->getLuas();
echo "<br> Luas Lingkaran 2: " . $lingkar2->getLuas();

echo '<br>';

echo "<br> Keliling Lingkaran 1: " . $lingkar1->getKeliling();
echo "<br> Keliling Lingkaran 2: " . $lingkar2->getKeliling();
