<?php
/**
* controller auth
*/
class AuthController
{
	private $model = null;
	private $twig;

	function __construct($db, $twig)
	{
		include __DIR__ . '/../models/auth.php';
		$this->model = new AuthModel($db);
		$this->twig = $twig;
	}


	/**
	 * Регистрация и Авторизация
	 */
	public function auth()
	{
		$view = '';
		$params = [];
		if (isset($_SESSION['user_login'])) {
			header('Location: /?/task');
			die;
		}


		if (!empty($_POST['register'])) {
			if (empty($_POST['login']) or empty($_POST['password'])) {
				$params['notice'] = 'Ошибка регистрации. Введите все необхдоимые данные.';
			} else {
				if ($this->model->countLogins($_POST['login']) === 0) {
					if ($this->model->register($_POST['login'], $_POST['password'])) {
						foreach ($this->model->signIn($_POST['login'], $_POST['password']) as $userInfo) {
							$_SESSION['user_login'] = $userInfo['login'];
							$_SESSION['user_id'] = $userInfo['id'];
							header('Location: /?/task');
						}
					}
				} else {
					$params['notice'] = 'Такой пользователь уже существует в базе данных.';
				}
			}
		}



		/**
		 * Авторизация
		 */
		if (!empty($_POST['sign_in'])) {
			if (empty($_POST['login']) or empty($_POST['password'])) {
				$params['notice'] = 'Ошибка входа. Введите все необхдоимые данные.';
			} else {
				if ($this->model->countLogins($_POST['login']) === 1) {
					foreach ($this->model->signIn($_POST['login'], $_POST['password']) as $userInfo) {
						if (password_verify($_POST['password'], $userInfo['password'])) {
							$_SESSION['user_login'] = $userInfo['login'];
							$_SESSION['user_id'] = $userInfo['id'];
							header('Location: /?/task');
						} else {
							$params['notice'] = "Такой пользователь не существует, либо неверный пароль.";
							break;
						}
					}
				} else {
					$params['notice'] = 'Такой пользователь не существует, либо неверный пароль.';
				}
			}
		}
		$baseTmp = $this->twig->load('auth/index.html');
		$view .= $baseTmp->render($params);
		echo $view;
	}
}