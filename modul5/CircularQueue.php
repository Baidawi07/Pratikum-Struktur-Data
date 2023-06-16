<?php
class CircularQueue {

  protected int $limit;
  protected int $front;
  protected int $rear;
  protected array $data;

  public function __construct($max){
    $this->max = $max;
    $this->front = 0;
    $this->rear = 0;
    $this->data = [];
  }

  public function enqueue($a) {
    if ($this->isFull()){
      echo "Queue is full".PHP_EOL;
    } else {
      $this->rear = ($this->rear + 1) % $this->max;
      $this->data[$this->rear] = $a;
    }
  }

  public function dequeue() {
    if ($this->isEmpty()){
      echo "Queue is Empty".PHP_EOL;
    }else{
      $this->front = ($this->front + 1) % $this->max;
      return $this->data[$this->front];
    }
    }

    public function isEmpty(){
      return $this->front == $this->rear;
    }
    public function isFull(){
      if (($this->rear + 1) % $this->max == $this->front)
      {
        return true;
      }
      return false;
    }

    public function printQueue(){
      if ($this->isEmpty()){
        echo "Queue is Empty";
      }else{
        $i= $this->front;
        while ($i != $this->rear ){
        $i = ($i + 1) % $this->max;
        echo $i." = " .$this->data[$i]." ".PHP_EOL;

        }
      }
    }
  }
