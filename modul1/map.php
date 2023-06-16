<?php
function kalimat($k){
  $k = strtoupper($k);
  return $k;
}
$a = array("asmat" => "asmat", "baidawi" => "baidawi");
print_r(array_map("kalimat", $a));