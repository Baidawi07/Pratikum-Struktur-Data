<?php
$angka = [1, 2, 3, 4, 5, 6, ];
$angka2 = array_filter($angka, function ($a) {
  return $a % 2 == 0;
});
print_r($angka2);