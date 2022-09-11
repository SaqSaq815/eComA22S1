<?php
	namespace app\core;

	class App{
		private $controller = 'Main';
		private $method = 'index';

		public function __construct(){
			//echo $_GET['url'];
			//TODO: replace this echo with the routing algorithm
			//goal: separate the url in parts

			$url = self::parseurl(); // get the url parsed and returned as an array of url segment

			// use the first part to determine the class to load
			
			if(isset($url[0])){
				if(file_exists('app/controller' . $url[0] . '.php')){
					$this->controller = $url[0]; // this refers to the current object
				}
				unset($url[0]);
			}
			$this->controller = 'app\\controllers\\' . $this->controller; // provide a fully qualified classname
			$this->controller = new $this->controller;

			// use the second part to determine the method to run
			if(isset($url[1])){
				if(method_exists($this->controller, $url[1])){
					$this->method = $url[1];
				}
				unset($url[1]);
			}

			// ...while passing all other parts as arguments
			// repackage the parameters
			$params = $url ? array_values($url) : [];
			call_user_func_array([ $this->controller, $this->method ], $params);		
		}

		public static function parseUrl(){
			if(isset($_GET['url'])) // get url exits
			{
				return explode('/',// return parts in an array, separated by /
					filter_var( // REMOVE NON URL CHARACTERS AND SEQUENCES
						rtrim($_GET['url'], '/'))
					,FILTER_SANITIZE_URL);
			}
		}


	}