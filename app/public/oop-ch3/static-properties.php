<?php
require_once 'Counter.php';
require_once 'Connection.php';

$con1 = new Connection();
print Connection::$count . PHP_EOL;
$con2 = new Connection();
print Connection::$count . PHP_EOL;
Connection::$count += 50;
print Connection::$count . PHP_EOL;
//Counter::$count++;
//print Counter::$count;