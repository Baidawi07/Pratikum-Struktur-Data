<?php
spl_autoload_register(function ($class) {
  include $class . '.php';
});
 try {
$queue = new QueueList();
$queue->enqueue(10);
$queue->enqueue(20);
$queue->enqueue(30);

$queue->print();  // Output: 10 20 30

$dequeued = $queue->dequeue();
echo "Dequeued element: " . $dequeued .PHP_EOL;  // Output: Dequeued element: 10

$queue->print();  // Output: 20 30

$queue->enqueue(40);

$queue->print();  // Output: 20 30 40

$dequeued = $queue->dequeue();
echo "Dequeued element: " . $dequeued .PHP_EOL;  // Output: Dequeued element: 20
$dequeued = $queue->dequeue();
echo "Dequeued element: " . $dequeued .PHP_EOL;  // Output: Dequeued element: 30
$dequeued = $queue->dequeue();
echo "Dequeued element: " . $dequeued .PHP_EOL;  // Output: Dequeued element: 40
$queue->print();  // Output: Queue is empty
  }catch(Exception $e){
    echo $e->getMessage();
}
