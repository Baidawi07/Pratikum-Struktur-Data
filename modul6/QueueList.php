<?php
class QueueList {
  protected $front;
  protected $rear;

  public function __construct() {
    $this->front = null;
    $this->rear = null;
  }

  public function isEmpty() {
    return $this->front == null;
  }

  public function enqueue($data) {
    $newNode = new Node($data);

    if ($this->rear == null) {
      $this->front = $newNode;
      $this->rear = $newNode;
    } else {
      $this->rear->next = $newNode;
      $this->rear = $newNode;
    }
  }

  public function dequeue() {
    if ($this->isEmpty()) {
      return null;
    }else{
    $deleteNode = $this->front;
    $this->front = $this->front->next;

    if ($this->front == null) {
      $this->rear = null;
    }
    return $deleteNode->data;
    }
  }

  public function print() {
    if ($this->isEmpty()) {
      echo "Queue is empty".PHP_EOL;
      return;
    }

    $current = $this->front;
    while ($current != null) {
      echo $current->data . " ";
      $current = $current->next;
    }
    echo PHP_EOL;
  }
}
