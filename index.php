<?php

require __DIR__ . '/vendor/autoload.php';
require 'Classes/MyClass.php';
require 'Classes/NewClass.php';
require 'Classes/Header.php';


$log = new Monolog\Logger('name');
$log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));
$log->addWarning('Foo');

$header = new \Classes\Header();

$myclass = new \Classes\MyClass();
$myclass->say_var();

$newclass = new \NewClasses\MyClass();
$newclass->say_var();
