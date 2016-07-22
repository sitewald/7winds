<?php 
require_once('Controller.php');
require_once('app/model/Tree.php');
require_once('app/helpers/Constant.php');
require_once('app/helpers/RegularHelper.php');
require_once('app/helpers/ArrayHelper.php');

class partController extends Controller{
	public function part1(){
		$this->render('part', 'part1', array(
				'text' => Constant::TEXT_FOR_REGULAR1,
				'result' => RegularHelper::parseTags(Constant::TEXT_FOR_REGULAR1)
			));
	}

	public function part2(){
		$this->render('part', 'part2', array(
				'text' => Constant::TEXT_FOR_REGULAR2,
				'result' => RegularHelper::getTextBetweenKeys(Constant::TEXT_FOR_REGULAR2)
			));
	}

	public function part3(){
		$this->render('part', 'part3', array(
			'tree' => Tree::getTotalStringStructure()
			));
	}

	public function part4(){
		$this->render('part', 'part4', array(
			'result' => Tree::getItemsForPart4()
			));
	}

	public function part5(){
		$this->render('part', 'part5', array(
			'result' => Tree::getItemsForPart5()
			));
	}

	public function part6(){
		$this->render('part', 'part6', array(
				'time' => 'Выбор повторяющихся чисел занял ' . 
						  ArrayHelper::testDuplicateValues() . ' милисекунд',
				'code' => Constant::CODE_PART6
			));
	}

	public function part7(){
		$this->render('part', 'part7', array(
				'result' => ArrayHelper::getCombinations()
			));
	}
}

?>