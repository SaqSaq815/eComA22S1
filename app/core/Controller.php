<?php
namespace app\core;

class Controller{
	// TODO: add a parameter for data later
	// =[] is a default method loadding, kinda like overloading from java
	public function view($name, $data = []){
		include('app/views/' . $name . '.php');
	}

}




