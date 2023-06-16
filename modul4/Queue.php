<?php
class Queue {
  protected array $queue = [];
  protected int $limit;
  // front adalah index pertama queue dalam array
  protected int $front = 0;
  // rear adalah index elemen terakhir queue dalam array
  protected int $rear = 0;

  public function __construct($limit = 10)  {
    $this->limit = $limit;
  }

  public function isFull(): bool {
    return count($this->queue) == $this->limit;
  }

  public function isEmpty(): bool {
    return $this->rear == $this->front;
  }

  public function enqueue(mixed $item): void {
    if (! $this->isFull()) {
      $this->queue[$this->rear] = $item;
      // rear bergerak mundur ke belakang
      $this->rear = $this->rear;
    }
  }
  public function dequeue(): mixed {
    for ($i=$this->rear; $i <= $this->front-1; $i++) { 
      $this->queue[$i] = $this->queue[$i+1];

    }
    $this->rear--;
    return $i;
    
  }

  public function printQueue(): string {
    return implode(', ', $this->queue);
  }
}