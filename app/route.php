<?php 
if(isset($_GET['controller']) && isset($_GET['action'])){
	$route = array(
			'controller' => $_GET['controller'],
			'action' => $_GET['action']
		);
}else{
	// ---------------- default route
	//
	$route = array( 
			'controller' => 'home',
			'action' => 'index'
		);
}

$controllerClass = "{$route['controller']}Controller";

require_once("controller/{$controllerClass}.php");

$controller = new $controllerClass();

$controller->$route['action']();
?>