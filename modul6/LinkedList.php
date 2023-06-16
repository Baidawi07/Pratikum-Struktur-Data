<?php
class LinkedList {
  private ? Node $head;
  private int $length;

  public function __construct() {
    $this->head = null;
    $this->length = 0;
  }

  public function getHead(): ? Node {
    if ($this->head == null) {
      return null;
    } else {
      return $this->head;
    }
  }

  public function getLength(): int {
    return $this->length;
  }

  public function isEmpty(): bool {
    return $this->length == 0;
  }

  public function insertFirst(Node $node): void {
    if ($this->head == null) {
      $this->head = $node;
    } else {
      $node->setNext($this->head);
      $this->head = $node;
    }
    $this->length = $this->length + 1;
  }

  public function insertLast(Node $node): void {
    if ($this->head == null) {
      $this->head = $node;
    } else {
      $current = $this->head;
      while ($current->getNext() != null) {
        $current = $current->getNext();
      }
      $current->setNext($node);
    }
    $this->length = $this->length + 1;
  }

  public function deleleFirst(): void {
    if ($this->head != null) {
      $current = $this->head;
      $this->head = $this->head->getNext();
      unset($current);
      $this->length = $this->length - 1;
    }
  }

  public function deleteLast(): void {
    if ($this->head != null) {
      $current = $this->head;
      while ($current->getNext() != null) {
        $previous = $current;
        $current = $current->getNext();
      }
      $previous->setNext(null);
      unset($current);
      $this->length = $this->length - 1;
    }
  }

  public function insertAt(Node $node, int $index = 0): void {
    if ($index == 0) {
      $this->insertFirst($node);
    } else if ($index == $this->length) {
      $this->insertLast($node);
    } else if ($index > 0 && $index < $this->length) {
      $current = $this->head;
      $i = 0;
      while ($i < $index - 1) {
        $current = $current->getNext();
        $i = $i + 1;
      }
      $node->setNext($current->getNext());
      $current->setNext($node);
      $this->length = $this->length + 1;
    }
  }

  public function deleteAt(int $index): void {
    if ($index == 0) {
      $this->deleleFirst();
    } else if ($index == $this->length - 1) {
      $this->deleteLast();
    } else if ($index > 0 && $index < $this->length - 1) {
      $current = $this->head;
      $i = 0;
      while ($i < $index - 1) {
        $current = $current->getNext();
        $i = $i + 1;
      }
      $current->setNext($current->getNext()->getNext());
      $next = $current->getNext();
      unset($next);
      $this->length = $this->length - 1;
    }
  }

  public function print(): void {
    if ($this->head != null) {
      $current = $this->head;
      while ($current != null) {
        echo $current->getData() . " ";
        $current = $current->getNext();
      }
      echo PHP_EOL;
    }
  }
}