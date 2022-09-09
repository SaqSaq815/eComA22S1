<?php
	namespace app\controllers;

	class Main extends \app\core\Controller{
		public function index(){
			$this -> view('Main/index');
		}
		public function index2(){
			$this -> view('Main/index2');
		}
		public function foods(){
			
			// important for assignment. delete this comment later!!!!

			//process the form if it is submitted
			if(isset($_POST['action'])){
				//create a food object
				$newfood = new \app\models\Food();
				//populate the food object
				$newfood->name = $_POST['new_food'];
				//call insert
				$newfood->insert();
			}


			//read the foods.tct file onto a variable
			//$foods = file("app/resources/foods.txt"); //  moved to Food.php
			$food = new \app\models\Food();
			$foods = $food->getAll();

			//pass the foods to the view for render and output
			$this -> view('Main/foods', $foods);
		}

		public function foodsJSON(){
			// service that outputs JSON
			//read the foods.tct file onto a variable
			//$foods = file("app/resources/foods.txt"); //  moved to Food.php
			$food = new \app\models\Food();
			$foods = $food->getAll();

			echo json_encode($foods);
		}

		public function foodsAJAX(){
			$this->view('Main/foodsAJAX');
		}





	}