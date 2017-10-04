<?php
/**
* controller Main
*/
class MainController
{
	private $twig;

	public function __construct($twig)
	{
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
		echo "<a href=\"?/auth\">Войдите на сайт</a>";
	}
}