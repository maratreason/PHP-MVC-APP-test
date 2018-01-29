<?php 

/*
** Класс маршрутизации
** URL http://mvc-app/
** URL http://mvc-app/cabinet
** URL http://mvc-app/cabinet/users
** URL http://mvc-app/cabinet/orders/
** URL http://mvc-app/cabinet/orders?orderId=
*/

class Routing {	

	public static function buildRoute() {

		/*
			Контроллер и action по умолчанию
		*/

			$controllerName = "IndexController";
			$modelName = "IndexModel";
			$action = "index";

			$route = explode("/", $_SERVER['REQUEST_URI']);

			/* Определяем контроллер */

			if($route[1] != '') {
				$controllerName = ucFirst($route[1]. "Controller");
				$modelName = ucFirst($route[1]. "Model");
			}

			/* Будет подключен любой контроллер, либо по умолчанию, либо который определен */

			require_once CONTROLLER_PATH . $controllerName . ".php"; // "IndexController.php"
			require_once MODEL_PATH . $modelName . ".php"; // "IndexModel.php"

			/* action */

			if(isset($route[2]) && $route[2] != '') {
				$action = $route[2];
			}

			$controller = new $controllerName();
			$controller -> $action(); // $controller->index();

	}

	/* 404 */

	public function errorPage() {

	}

}


 ?>