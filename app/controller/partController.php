<?php 
require_once('Controller.php');
require_once('app/model/Tree.php');
require_once('app/helpers/Constant.php');
require_once('app/helpers/RegularHelper.php');

class partController extends Controller{
	public function part1(){
		$result = RegularHelper::parseTags(Constant::TEXT_FOR_REGULAR1);

		$this->render('part', 'part1', array(
				'text' => Constant::TEXT_FOR_REGULAR1,
				'result' => $result
			));
	}

	public function part2(){
		$result = RegularHelper::getTextBetweenKeys(Constant::TEXT_FOR_REGULAR2);

		$this->render('part', 'part2', array(
				'text' => Constant::TEXT_FOR_REGULAR2,
				'result' => $result
			));
	}

	public function part3(){
		$stringTree = Tree::getTotalStringStructure();

		$this->render('part', 'part3', array('tree' => $stringTree));
	}

	public function part4(){
		$result = Tree::getItemsForPart4();

		$this->render('part', 'part4', array('result' => $result));
	}

	public function part5(){
		$result = Tree::getItemsForPart5();

		$this->render('part', 'part5', array('result' => $result));
	}

	public function part6(){
		$this->render('part', 'part6');
	}

	public function part7(){
		$this->render('part', 'part7');
	}
}

?>