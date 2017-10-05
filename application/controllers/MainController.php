<?php
/**
* controller Main
*/
class MainController
{
	private $twig;

	public function __construct($db, $twig)
	{
		$this->db = $db;
		$this->twig = $twig;
	}

	
	public function logout()
	{
		session_destroy();
		header('Location: /');
	}


	public function index()
	{
		if (isset($_SESSION['user_login'])) {
			header('Location: /?/task');
			die;
		}
		$baseTmp = $this->twig->load('main/index.html');
		echo $baseTmp->render();
	}
}