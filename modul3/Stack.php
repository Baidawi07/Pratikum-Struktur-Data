<?php
class Stack {
  private array $stack = [];
  private int $height = 0; 
  private int $limit;

  public function __construct($limit = 10) {
    $this->limit = $limit;
  }

  public function push($item): void {
    if ($this->height < $this->limit) {
      $this->height = $this->height + 1;
      $this->stack[$this->height] = $item;
    } else {
      // STACK OVERFLOW
      throw new RunTimeException('Stack is full!');
    }
  }

  public function pop(): mixed {
    if ($this->isEmpty()) {
      // STACK UNDERFLOW
      throw new RunTimeException('Stack is empty!');
    } else {
      $item = $this->top();
      unset($this->stack[$this->height]);
      $this->height = $this->height - 1;
      return $item;
    }
  }

  public function top(): mixed {
    if ($this->isEmpty()) {
      // STACK UNDERFLOW
      throw new RunTimeException('Stack is empty!');
    } else {
      return $this->stack[$this->height];
    }
  }

  public function isEmpty(): bool {
    return empty($this->stack);
  }

  public function toString(): string {
    return implode('', $this->stack);
  }
}