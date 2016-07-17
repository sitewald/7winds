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
		$arr = array(
				array('a1', 'a2', 'a3'),
				array('b1', 'b2'),
				array('c1', 'c2', 'c3'),
				array('d1')
			);

		$result = array();

		$resultRowIndex = 0;

		$result = self::recursive($arr, count($arr), 0, $result, $resultRowIndex);

		unset($result[$resultRowIndex]);

		return $result;
	}

	public static function recursive($in, $inLen, $inRowI, $out, &$outRowI){
		$count = count($in[$inRowI]);

		for ($i = 0; $i < $count; $i++){

			$out[$outRowI][$inRowI] = $in[$inRowI][$i];

			if($inRowI == $inLen - 1){

				$memory = $out[$outRowI];
				$outRowI++;
				$out[$outRowI] = $memory;
			}else{
				$out = self::recursive($in, $inLen, $inRowI + 1, $out, $outRowI);
			}
		}

		return $out;
	}
}

?>