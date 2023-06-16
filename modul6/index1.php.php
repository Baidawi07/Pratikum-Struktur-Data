<?php
spl_autoload_register(function ($class) {
  include $class . '.php';
});
 try {
  $stack = new StackList();
  // Push some elements onto the stack
  $stack->push(1);
  $stack->push(2);
  $stack->push(3);
  
  // cetak element tumpukan
  echo $stack->print().PHP_EOL; // Output: 3 2 1
  
  // mengeluarkan element
  $stack->pop();
  
  // cetak kembali element tumpukan
  $stack->print(); // Output: 2 1
  }catch(Exception $e){
    echo $e->getMessage();
}
