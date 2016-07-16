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
}
?>