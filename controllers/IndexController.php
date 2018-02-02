<?php 

class IndexController extends Controller {

	private $pageTpl = '/views/main.tpl.php';

	public function __construct() {
		$this->model = new IndexModel();
		$this->view = new View();
	}

	public function index() {
		$this->pageData['title'] = "Вход в личный кабинет";
		$this->view->render($this->pageTpl, $this->pageData);

		if(!empty($_POST)) {
			if(!$this->login()) {
				$this->pageData['error'] = "Неправильный логин или пароль";
			}
		}
	}

	public function login() {
		if(!$this->model->checkUser()) {
			return false;
		}
	}

}

 ?>