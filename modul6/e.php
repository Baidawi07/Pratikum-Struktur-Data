<?php
// Class untuk mewakili linked list
class Node {
    public $data;
    public $next;
    
    public function __construct($data) {
      $this->data = $data;
      $this->next = null;
    }
  }
  