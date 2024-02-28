<?php
// tangkap input form
$customer = $_POST['customer'];
$produk = $_POST['produk'];
$jumlah = $_POST['jumlah'];

// array harga produk
$harga = [
    'TV' => 4200000,
    'Kulkas' => 3100000,
    'Mesin Cuci' => 3800000
];

// hitung total harga (jumlah * harga produk)
$total = $jumlah * $harga[$produk];

// format rupiah
$total = number_format($total);

echo "Nama Customer: $customer";
echo "<br> Produk: $produk";
echo "<br> Jumlah Beli: $jumlah";
echo "<br> Total Belanja: Rp $total";
