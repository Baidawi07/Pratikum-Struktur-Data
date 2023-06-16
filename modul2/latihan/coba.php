<?php
function isPopOrder(array $push, array $pop):bool
{
  if (empty($push) || empty($pop)){
    throw new RunTimeException('Stack is full!');
  }
  $stack = new SplStack;
  while (!empty($push)){
    $stack->push(array_shift($push));
    while ($stack->top() == $pop[0]){
      $stack->pop();
      array_shift($pop); 
      if(empty($pop)){
        return true;
      }
      if ($stack->isEmpty()){
        break;
      }
    }
  }
  if (empty($pop)){
    return true;
  }
  return false;
}
$push = ['1,2,3,4,5'];
$pop = [5,4,3,2,1];
var_dump( isPopOrder($push, $pop));