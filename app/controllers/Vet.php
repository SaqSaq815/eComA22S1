<?php
namespace app\controllers;

class Vet extends \app\core\Controller {
	public function index(){
		//display all the owners in the database
		//make an owner object
		$owner = new \app\models\Owner();
		//call getAll on that object to get the collections of all owners
		$owners = $owner->getAll();
		//call a view and pass the collection for display
		$this->view('Vet/index',$owners);
	}

	//to add a new owner in our database
	public function add(){
		//if i submit the form
		if(isset($_POST['action'])){
			//create a new form
			$newOwner = new \app\models\Owner();
			//populate the new owner objects
			$newOwner->first_name = $_POST['first_name'];
			$newOwner->last_name = $_POST['last_name'];
			$newOwner->contact = $_POST['contact'];
			//call insert on the new owner object
			$newOwner->insert();//to build
			//redirect back to the list (index)
			header('location:/Vet/index');
		}
		else
			$this->view('Vet/addOwner');
	}

	public function delete ($owner_id){
		$owner = new \app\models\Owner();
		$owner->owner_id = $owner_id;
		$owner->deleteAnimals();
		$owner->delete();
		header('location:/Vet/index');// redirect back to the list
	}

	public function edit($owner_id){
		$owner = new \app\models\Owner();
		$owner = $owner->get($owner_id);// need this
		if(isset($_POST['action'])){
			$owner->first_name = $_POST['first_name'];
			$owner->last_name = $_POST['last_name'];
			$owner->contact = $_POST['contact'];

			$owner->update();

			header('location:/Vet/index');
		}else{
			$this->view('Vet/editOwner', $owner);
		}
	}

	public function details($owner_id){
		$owner = new \app\models\Owner();
		$owner = $owner->get($owner_id);
		$this->view('/Vet/ownerDetails', $owner);
	}
}