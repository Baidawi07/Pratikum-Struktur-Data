<?php
spl_autoload_register(function ($class) {
  include $class . '.php';
});

$infix = '2+3/4+5*(6-7)^8';
echo 'Infix: ' . $infix . PHP_EOL;
$converterPostfix = new Converter($infix);
echo 'Postfix: ' . $converterPostfix->toPostfix() . PHP_EOL;

$converterInfix = new Converter($infix);
echo 'Prefix: ' . $converterInfix->toPrefix() . PHP_EOL;