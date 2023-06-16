<?php
class Node {
  private ? Node $next;  // tanda ? berarti boleh null
  private mixed $data; // mixed berarti boleh berbagai tipe data

  public function __construct(mixed $data) {
    $this->data = $data;
    $this->next = null;
  }

  public function getNext() {
    return $this->next;
  }

  public function setNext(?Node $next) {
    $this->next = $next;
  }

  public function getData() {
    return $this->data;
  }
}