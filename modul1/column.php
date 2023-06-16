<?php
$angka = [
  ['nama' => 'Andi', 'umur' => 20],
  ['nama' => 'Budi', 'umur' => 21],
  ['nama' => 'Caca', 'umur' => 22],
];
$nama = array_column($angka, 'nama');
print_r($nama);