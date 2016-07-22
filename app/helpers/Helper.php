<?php 

class Helper{
	public static function url($controller, $action, $params = null){
		$url = "/index.php?controller={$controller}&action={$action}";
		if($params === null) return $url;

		foreach($params as $key => $value){
			$url .= "&$key=$value";
		}

		return url;
	}
}

?>