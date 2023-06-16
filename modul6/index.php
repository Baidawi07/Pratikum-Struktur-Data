<?php
spl_autoload_register(function ($class) {
  include $class . '.php';
});
 try {
     $linkedlist = new LinkedList();
     $linkedlist->insertFirst(new Node("A"));
     $linkedlist->insertFirst(new Node("B"));
     $linkedlist->insertFirst(new Node("C"));

     $linkedlist->insertLast(new Node("D"));
     $linkedlist->print();

     $linkedlist->deleteLast();
     $linkedlist->deleteAt(2);
     $linkedlist->print();
 }catch(Exception $e){
     echo $e->getMessage();
 }