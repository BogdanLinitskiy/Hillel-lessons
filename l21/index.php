<?php
namespace main;

ini_set('display_errors',1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use util\library\MyClass as utMyClass;
use util\members\MyClass as umMyClass;



require_once 'useful/Outputter.php';
require_once 'util/library/MyClass.php';
require_once 'util/members/MyClass.php';

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

//echo Outputter::sayHello();
//echo '<br>';
//echo \useful\Outputter::sayHello();
//echo '<br>';
//echo \util\library\MyClass::sayMethodName();

echo MyClass::sayMethodName();
echo '<br>';
echo utMyClass::sayMethodName();
echo '<br>';
echo umMyClass::sayMethodName();