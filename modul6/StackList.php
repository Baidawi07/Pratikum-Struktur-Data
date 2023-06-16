<?php
class StackList { 
  private $head;

  public function __construct() {
    $this->head = null;
  }
  public function push($data) {
    $node = new Node($data);
    $node->next = $this->head;
    $this->head = $node;
  }
  // Method untuk mengeluarkan node teratas di stack
  public function pop() {
    if ($this->head == null) {
      return null;
    }
    // simpan tumpukan sementara ke variabel temp
    $temp = $this->head;
    $this->head = $this->head->next;
    return $temp->data;
  }
  // Method untuk mencetek elements 
  public function print() {
    if ($this->head == null) {
      echo "The stack is empty.";
      return;
    }
    $temp = $this->head;
    while ($temp !== null) {
      echo $temp->data . " ";
      $temp = $temp->next;
    }
  }
}

