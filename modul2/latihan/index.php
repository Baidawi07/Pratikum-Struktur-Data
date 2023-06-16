<?php
spl_autoload_register(function ($class) {
  include $class . '.php';
});
try {
  $stack = new Stack();
  // $stack->push('one');
  // $stack->push('two');

  $stack->multiPush(['satu', 'dua', 'tiga', 'empat']);
  $stack->multiPop(3);

  echo $stack->top() . PHP_EOL;
  echo $stack->getHeight() . PHP_EOL;

  $stack->pop();

  echo $stack->top(). PHP_EOL;
  echo $stack->getHeight() . PHP_EOL;

} catch (RunTimeException $e) {
  echo $e->getMessage() . PHP_EOL;
}
echo"----------------Tugas Pratikum---------------------------".PHP_EOL;

$stack->push ("Saya beli mobil" );
echo strrev($stack->pop()).PHP_EOL;

$stack->push(14);
echo decbin($stack->pop()).PHP_EOL;