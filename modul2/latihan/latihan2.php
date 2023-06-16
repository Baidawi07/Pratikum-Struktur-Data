<?php
class Stack{
    private $data = array();
    private $top;

    public function push($data){
        $this->data[$this->top++] = $data;
    }

    public function isEmpty(){
        return empty($this->data);
    }

    public function pop(){
        return array_pop($this->data);
    }

    public function multiPush($item): void{
        foreach($item as $item){
          $this->push($item);
        }
      }
    
      public function multiPop(int $n) {
        $result = [];
        for($i = 0; $i < $n; $i++){
          $result [] = $this->pop();
        }
        return $result;
      }
}

// $stack = new Stack();
// $stack->multiPush(1);
// $stack->multiPop(4);

$stack->push ("Saya beli mobil" );
echo strrev($stack->pop()).PHP_EOL;

$stack->push(14);
echo decbin($stack->pop()).PHP_EOL;