<?php 

/**
* Класс маршрутизации
* URL http://http://php-app/
* URL http://http://php-app/cabinet
* URL http://http://php-app/cabinet/users/
* URL http://http://php-app/cabinet/orders/
* URL http://http://php-app/cabinet/orders/?orderId=
*/
class Routing {

	public static function buildRoute() {

		/*
		* Контроллер и action по умолчанию
		*/
		$controllerName = "IndexController";
		$modelName = "IndexModel";
		$action = "index";

		$route = explode("/", $_SERVER['REQUEST_URI']);

		/*
		* Определяем контроллер
		*/
		if ($route[1] != '') {
			$controllerName = ucfirst($route[1]. "Controller");
			$modelName = ucfirst($route[1]. "Model");
		}

		// IndexController.php
		include CONTROLLER_PATH . $controllerName . ".php";

		// IndexModel.php
		include MODEL_PATH . $modelName . ".php";

		if (isset($route[2]) && $route[2] != '') {
			$action = $route[2];
		}

		$controller = new $controllerName();

		// 4controller->index();
		$controller->$action();

	}

	/**
	* 404
	*/
	public function errorPage() {

	}

}