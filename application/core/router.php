<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

/**
* class Router по крайне мере должен быть :)
*/
class Router
{
	static function logout() // Лучше чем в Router это запихнуть не придумал
	{
		session_destroy();
		header('location: index.php');
	}


	static function start($db, $twig)
	{
		if (!empty($_SESSION['user_login'])) {
			$controller = new TaskController($db, $twig);
			$controller->getTodoList();
			echo '<a href=\'?action=logout\'>Выйти</a>';
		} else {
			if (!empty($_GET['action']) and (string) $_GET['action'] == 'auth') {
				require_once __DIR__ . '/../controllers/auth.php';
				require_once __DIR__ . '/../models/auth.php';

				$controllerAuth = new AuthController($db, $twig);
				$controllerAuth->getAuth();
			} else {
				echo '<a href=\'?action=auth\'>Войдите на сайт</a>';
			}
		}


		/**
		* Проверка события выйти
		*/
		if (!empty($_GET['action']) and (string) $_GET['action'] == 'logout') {
			self::logout();
		}
	}
}