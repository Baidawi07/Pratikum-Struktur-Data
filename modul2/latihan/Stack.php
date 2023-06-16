<?php
class Stack {
  private array $stack = [];
  private int $limit;
  private int $height = 0;

  public function __construct(int $limit = 10) {
    // set batas stack
    $this->limit = $limit;
  }

  public function push(mixed $item): void{
    if ($this->height < $this->limit) {
      // set tinggi baru stack
      $this->height = $this->height + 1;
      // masukkan item ke dalam stack
      $this->stack[$this->height] = $item;
    } else {
      throw new RunTimeException('Stack is full!');
    }
  }

  public function pop(): mixed {
    if ($this->isEmpty()) {
      // jika stack kosong
      throw new RunTimeException('Stack is empty!');
    } else {
      // jika stack tidak kosong
      // dapatkan item teratas yang akan dihapus
      $item = $this->top();
      // hapus item dari stack
      unset($this->stack[$this->height]);
      // set tinggi stack baru
      $this->height = $this->height - 1;
      return $item;
    }
  }

  public function top(){
    // dapatkan item teratas
    if ($this->isEmpty()) {
      throw new RunTimeException('Stack is empty!');
    } else {
      return $this->stack[$this->height];
    }
  }

  public function getHeight(): int {
    // dapatkan tinggi stack
    return $this->height;
  }

  public function isEmpty(): bool {
    // cek apakah stack kosong
    return empty($this->stack);
  }

  public function isFull(): bool {
    // cek apakah stack penuh
    return $this->height === $this->limit;
  }

  public function clear(): void {
    // hapus semua item dari stack
    $this->stack = [];
    $this->height = 0;
  }
  
  public function multiPush(array $item): void{
    foreach($item as $item){
      $this->push($item); //mengepush item ke stack
    }
  }

  public function multiPop(int $n) {
    $result = [];
    for($i = 0; $i < $n; $i++){
      $result [] = $this->pop(); //pop sebanyak n
    }
    return $result;
  }

}