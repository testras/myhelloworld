<?php

require_once '../vendor/autoload.php';

use SayHelloForWorld\HelloWorld;
echo PHP_EOL;
$test = new HelloWorld;
$test->sayHello();
echo PHP_EOL;