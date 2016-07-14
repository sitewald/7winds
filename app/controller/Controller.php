<?php
class Controller{
	const VIEW_PATH = 'app/view/';
	const LAYOUT = 'app/view/layout.php';

	protected $viewTitle;
	protected $viewBody;

	public function render($controller, $action, $params = null){
		$this->viewBody = self::VIEW_PATH . $controller . '/' . $action . '.php';

		require_once(self::LAYOUT);
	}
}

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