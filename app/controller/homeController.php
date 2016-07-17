<?php 
require_once('Controller.php');

class homeController extends Controller{
	public function index(){
		$this->viewTitle = 'Главная страница';

		$this->render('home', 'index', array(
				'row1' => 'Белозеров Сергей',
				'row2' => 'Начало - 14 июля 14:50',
				'row3' => 'Окончание - 17 июля 13:00'
			));
	}
}

?>