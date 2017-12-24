<?php
namespace instance{
	function sayHello(){
		return __FUNCTION__;
	}
}
namespace my{
	function sayhello()
	{
		return __FUNCTION__;
	}
	echo \sayHello();
}
namespace {
	function sayHello(){
		return __FUNCTION__;
	}
	echo '<br>';
	echo \my\sayHello();
}
