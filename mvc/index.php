<?php

require_once 'vender/autoload.php';
// require_once 'inpiz/hello/Hello.php';
// require_once 'inpiz/tasks/Task01.php';
// require_once 'inpiz/tasks/Task02.php';

$sayHello = new \inpiz\hello\Hello();
$sayHello->say();

echo '<br>';

$task01 = new \inpiz\tasks\Task01();
$task01->todoTask();

echo '<br>';

$task02 = new \inpiz\tasks\Task02();
$task02->todoTask();
