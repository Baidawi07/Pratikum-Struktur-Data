<?php  
spl_autoload_register(function ($class) {
include $class. ".php";
});
try {
  //$kalimat = new Stack(20);
  $kata = 'Saya beli mobi';
  echo $kata. PHP_EOL;
  $kata = str_split($kata);
  $kalimat->multiPush($kata);
  $kata = '';
  while(!$kalimat->isEmpty()){
    $kata .= $kalimat->pop();
  }
  echo $kata .PHP_EOL;

} catch (RunTimeException $e) {
  echo $e->getMessage() . PHP_EOL;
}
