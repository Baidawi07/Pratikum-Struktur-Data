<?php

class Node{
  public $value;
  public $next;
}

class Stack{
  private $element;
  private $top;

  public function isEmpty(){
    return $this->top == null;
  }
  public function pop(){
    if(!$this->isEmpty()){
      $value = $this->top->value;
      $this->top = $this->top->next; 
      return $value;
    }
    return null;
  }
  public function push($value){
    $oldtop = $this->top;
    $this->top = new Node();
    $this->top->value = $value;
    $this->top->next = $oldtop;
  }
  
}

//Client code
$stack = new Stack();




$stack->push("end");
while(!$stack->isEmpty()){
  echo $stack->pop().PHP_EOL;
}