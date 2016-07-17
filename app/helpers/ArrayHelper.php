<?php 

class ArrayHelper{
	public static function testDuplicateValues(){
		$arr = array_fill(0, 1000000, 100001);

		$start = round(microtime(true) * 1000);

		$duplicate = array();

		for($i = 0; $i < 1000000; $i++){
			if(!in_array($arr[$i], $duplicate)){
				$duplicate[] = $arr[$i];
			}

			unset($arr[$i]);
		}

		$end = round(microtime(true) * 1000);

		$time = $end - $start;

		return $time;
	}

	public static function getCombinations(){
		// $arr = array(
		// 		array('a1', 'a2', 'a3'),
		// 		array('b1', 'b2'),
		// 		array('c1', 'c2', 'c3'),
		// 		array('d1')
		// 	);

		$arr = array(
				array('a1', 'a2'),
				array('b1', 'b2')
			);

		$result = array();

		$total = 0;

		foreach($arr as $row){
			$total *= count($row);
		}

		// a1 b1
		// a1 b2
		// a2 b1
		// a2 b2

		

		return $result;
	}
}

?>