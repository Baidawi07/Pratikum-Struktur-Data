<?php
spl_autoload_register(function ($class_name) {
  include $class_name . '.php';
});

try {
  $queue = new Queue();
  $queue->enqueue('First');
  $queue->enqueue('Second');
  $queue->enqueue('Third');

  echo'Isi Enqueue: ' . $queue->printQueue() . PHP_EOL;

  $queue->dequeue() . PHP_EOL;
  $queue->dequeue() . PHP_EOL;
  $queue->dequeue() . PHP_EOL;

  echo 'Isi Enqueue: ' . $queue->printQueue() . PHP_EOL;

  $queue->dequeue() . PHP_EOL;

  $queue->dequeue() . PHP_EOL;
} catch (RunTimeException $e) {
  echo $e->getMessage() . PHP_EOL;
}