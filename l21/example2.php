<?php

ini_set('display_errors',1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


use \util\library;

echo library\MyClass::sayMethodName();




























function __autoload($class){
	$path = str_replace('\\','/',$class).'.php';
	if(file_exists($path)){
		require $path;
	}
}