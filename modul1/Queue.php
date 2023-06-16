<?php

class Node {
  public $data;
  public $next;

  public function __construct($data) {
    $this->data = $data;
    $this->next = null;
  }
}
class Queue {
  private $front;
  private $rear;

  public function __construct() {
    $this->front = null;
    $this->rear = null;
  }

  public function isEmpty() {
    return $this->front === null;
  }

  public function enqueue($data) {
    $newNode = new Node($data);

    if ($this->rear === null) {
      $this->front = $newNode;
      $this->rear = $newNode;
    }else{
      $this->rear->next = $newNode;
      $this->rear = $newNode;
    }
  }

  public function dequeue() {
    if ($this->isEmpty()) {
      return null;
    }

    $removedNode = $this->front;
    $this->front = $this->front->next;

    if ($this->front === null) {
      $this->rear = null;
    }
    return $removedNode->data;
  }

  public function print() {
    if ($this->isEmpty()) {
      echo "Queue is empty\n";
      return;
    }

    $current = $this->front;
    while ($current !== null) {
      echo $current->data . " ";
      $current = $current->next;
    }
    echo "\n";
  }
}

// Contoh penggunaan Queue
$queue = new Queue();

$queue->enqueue(10);
$queue->enqueue(20);
$queue->enqueue(30);

$queue->print();  // Output: 10 20 30

$dequeued = $queue->dequeue();
echo "Dequeued element: " . $dequeued . PHP_EOL;  // Output: Dequeued element: 10

$queue->print();  // Output: 20 30

$queue->enqueue(40);

$queue->print();  // Output: 20 30 40

$dequeued = $queue->dequeue();
echo "Dequeued element: " . $dequeued .PHP_EOL;  // Output: Dequeued element: 20

$dequeued = $queue->dequeue();
echo "Dequeued element: " . $dequeued .PHP_EOL;  // Output: Dequeued element: 30

$dequeued = $queue->dequeue();
echo "Dequeued element: " . $dequeued .PHP_EOL;  // Output: Dequeued element: 40

$queue->print();  // Output: Queue is empty