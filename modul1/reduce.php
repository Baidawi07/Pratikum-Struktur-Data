<?php
$angka = [1, 2, 3, 4, 5,6];
$angka2 = array_reduce($angka, function ($a, $b) {
  return $a + $b;
});
echo $angka2; // 21