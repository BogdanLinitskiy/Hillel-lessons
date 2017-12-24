<?php

ini_set('display_errors',1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use util\library\MyClass as ulMyClass;
use util\members\MyClass as umMyClass;
//use util\Helper;

class Outputter{
	public static function sayHello(){
		return 'Hello, I am outputter from main namespace';
	}
}

function greatFunc(){
	return 'I am function from main namespace';
}

class MyClass
{
	public static function sayMethodName()
	{
		return __METHOD__;
	}
}

function __autoload($class){
	$path = str_replace('\\','/',$class).'.php';
	if(file_exists($path)){
		require $path;
	}
}

echo ulMyClass::sayMethodName().'<br>';
echo umMyClass::sayMethodName().'<br>';
echo \util\Helper::sayHi();