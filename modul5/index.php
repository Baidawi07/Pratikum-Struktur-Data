<?php
spl_autoload_register(function ($class) {
  include $class . '.php';
});

$queue = new CircularQueue(5);
$queue->enqueue(1);
$queue->enqueue(2);
$queue->enqueue(3);
$queue->enqueue(4);
$queue->enqueue(5);
$queue->printQueue();

echo PHP_EOL;

$queue->dequeue();
$queue->dequeue();
$queue->printQueue();
echo PHP_EOL;