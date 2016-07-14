<?php 
require_once('Controller.php');

class homeController extends Controller{
	public function index(){
		$this->viewTitle = 'Главная страница';

		$this->render('home', 'index', array('testVar' => 'testValue'));
	}
}

?>