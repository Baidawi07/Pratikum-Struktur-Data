<?php
class Converter {
  private string $infix;
  private array $precedence = [
    '^' => 3,
    '*' => 2,
    '/' => 2,
    '+' => 1,
    '-' => 1,
    '(' => 0,
    ')' => 0
  ];

  public function __construct(string $infix) {
    $this->infix = $infix;
  }

  // operand = [0-9], atau [a-z]
  private function isOperand(string $char): bool {
    $char = strtolower($char);
    return (ord($char) >= 97 && ord($char) <= 122) || (ord($char) >= 48 && ord($char) <= 57);
  }

  private function isOperator(string $char): bool {
    return ($char == '+' || $char == '-' || $char == '*' || $char == '/' || $char == '^' || $char == '(' || $char == ')');
  }

  private function hasHigherPrecedence(string $operator1, string $operator2): bool {
    return ($this->precedence[$operator1] > $this->precedence[$operator2]);
  }

  public function toPostfix(): string {
    $postfix = '';

    $operatorStack = new Stack(30);
    $outputStack = new Stack(30);

    try {
      for ($i = 0; $i < strlen($this->infix); $i++) {
        $char = $this->infix[$i];

        if ($this->isOperand($char)) {
          // jika char adalah operand, maka masukkan ke output stack
          $outputStack->push($char);
        } else if ($this->isOperator($char)) {          
          if ($operatorStack->isEmpty()) {
            $operatorStack->push($char);
          } else {
            if ($char == '(') {
              $operatorStack->push($char);
            } else if ($char == ')') {
              while (!$operatorStack->isEmpty() && $operatorStack->top() != '(') {
                $outputStack->push($operatorStack->pop());
              }
              if (!$operatorStack->isEmpty()) {
                $operatorStack->pop();
              }
            } else {
              if ($this->hasHigherPrecedence($char, $operatorStack->top())) {
                $operatorStack->push($char);
              } else {
                while (!$operatorStack->isEmpty() && !$this->hasHigherPrecedence($char, $operatorStack->top())) {
                  $outputStack->push($operatorStack->pop());
                }
                $operatorStack->push($char);
              }
            }
          }
        }
      }
      
      // pop semua operator stack dan masukkan ke output stack jika operator stack tidak kosong
      while (! $operatorStack->isEmpty()) {
        $outputStack->push($operatorStack->pop());
      }
    } catch (RunTimeException $e) {
      echo $e->getMessage() . PHP_EOL;
    }
    return $outputStack->toString();
  }

  private function reverseInfix(string $infix): string {
    // reverse infix, lalu ganti '(' dengan ')' dan sebaliknya
    $reverse = '';
    for ($i = strlen($infix) - 1; $i >= 0; $i--) {
      if ($infix[$i] == '(') {
        $reverse .= ')';
      } else if ($infix[$i] == ')') {
        $reverse .= '(';
      } else {
        $reverse .= $infix[$i];
      }
    }
    return $reverse;
  }

  public function toPrefix(): string {
    $prefix = '';
    // reverse infix
    $this->infix = $this->reverseInfix($this->infix);
    // convert infix to postfix
    $prefix = $this->toPostfix();
    // reverse postfix
    return strrev($prefix);
  }
}