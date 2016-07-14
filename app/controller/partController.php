<?php 
require_once('Controller.php');

class partController extends Controller{
	public function part1(){
		$this->render('part', 'part1');
	}

	public function part2(){
		$this->render('part', 'part2');
	}

	public function part3(){
		$this->render('part', 'part3');
	}

	public function part4(){
		$this->render('part', 'part4');
	}

	public function part5(){
		$this->render('part', 'part5');
	}

	public function part6(){
		$this->render('part', 'part6');
	}

	public function part7(){
		$this->render('part', 'part7');
	}
}

?>