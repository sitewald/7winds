<?php
require_once('app/helpers/Helper.php');

class Controller{
	const VIEW_PATH = 'app/view/';
	const LAYOUT = 'app/view/layout.php';

	protected $viewTitle;
	protected $viewBody;
	protected $viewData;

	public function render($controller, $action, $data = null){
		$this->viewData = $data;
		$this->viewBody = self::VIEW_PATH . $controller . '/' . $action . '.php';

		require_once(self::LAYOUT);
	}
}

?>