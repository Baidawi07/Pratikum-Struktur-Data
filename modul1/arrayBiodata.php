<?php
function kalimat($k){
  $k = strtoupper($k);
  return $k;
}
$data = [
  [
    'nama' => 'Andi',
    'umur' => 20,
    'hobi' => ['berenang', 'olahraga', 'main game'],
  ],
  [
    'nama' => 'Budi',
    'umur' => 21,
    'hobi' => ['nongkrong', 'makan', 'tidur'],
  ],
  [
    'nama' => 'Caca',
    'umur' => 22,
    'hobi' => ['hiking', 'berenang', 'bersepeda'],
  ],
  [
    'nama' => 'Deni',
    'umur' => 22,
    'hobi' => ['memancing', 'ngoding', 'menggambar'],
  ],
  [
    'nama' => 'Euis',
    'umur' => 24,
    'hobi' => ['membaca', 'menggambar', 'menonton film'],
  ],
];


$filter = array_filter($data, function($item){
  return $item['umur'] > 21;
});
$hobi = array_column($filter, 'hobi');
$hobi_filtel = array_reduce($hobi, 'array_merge', []);
$hobi_count = array_count_values($hobi_filtel);
arsort($hobi_count);
$paling_banyak = array_keys($hobi_count)[0];
echo "hobi yang paling banyak diikuti umur lebih dari 21 : ".$paling_banyak;
