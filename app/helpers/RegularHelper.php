<?php 
class RegularHelper{
	public static function getAllTags($regular, $text){
		preg_match_all($regular, $text, $result);

		return $result;
	}

	public static function parseTags($text){
		$tags = self::getAllTags('/\[.+]/', $text);

		$key_data = array();
		$key_description = array();

		if(!isset($tags[0])) return $result;

		foreach($tags[0] as $index => $tag){
			preg_match('/(?<=\[)\w+/', $tag, $key);
			preg_match('/(?<=\])[^\[]*/', $tag, $data);
			preg_match('/(?<=:)[^\]]*/', $tag, $description);

			if(!isset($key[0])) continue;

			if(isset($data[0])){
				$key_data[$key[0]] = $data[0];
			}

			if(isset($description[0]) && $description[0] !== ''){
				$key_description[$key[0]] = $description[0];
			}
		}

		return array(
				'first array' => $key_data,
				'second array' => $key_description
			);
	}

	public static function getTextBetweenKeys($text){
		$keys = self::getAllTags('/raz:|dva:|tri:/', $text);
		$result = array();

		if(!isset($keys[0])) return $result;

		$count = count($keys[0]);

		for($i = 0; $i < $count; $i++){
			// --- rewrite value of last key in list
			//
			if($i == $count - 1){
				$regular = '/^.*' . $keys[0][$i] . '(.*)$/s';
				preg_match_all($regular, $text, $values);

				if(!isset($values[1][0])) break;

				$result[$keys[0][$i]] = $values[1][0];

				break;
			}

			// ---------- get text between two keys
			// ---------- /(?<=raz:).*(?=dva:)/s
			//
			$regular = '/(?<=' . $keys[0][$i] . ').*(?=' . $keys[0][$i + 1] . ')/s';
			
			preg_match_all($regular, $text, $values);

			if(!isset($values[0][0])) continue;

			$result[$keys[0][$i]] = $values[0][0];
		}

		return $result;
	}
}
?>