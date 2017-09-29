<?php
/**
* controller auth
*/
class AuthController
{
	private $model = null;
	private $twig = null;

	function __construct($db, $twig)
	{
		$this->model = new AuthModel($db);
		$this->twig = $twig;
	}


	/**
	 * Регистрация или авторизация
	 */
	public function getAuth()
	{
		$view = ''; // Здесь весь сгенерированный html


		/**
		 * Авторизация
		 */
		if (!empty($_POST['sign_in'])) {
			if (empty($_POST['login']) or empty($_POST['password'])) {
				$view .= 'Ошибка входа. Введите все необхдоимые данные.';
			} else {
				if ($this->model->countLogins($_POST['login']) === 1) {
					foreach ($this->model->signIn($_POST['login'], $_POST['password']) as $userInfo) {
						if (password_verify($_POST['password'], $userInfo['password'])) {
							$_SESSION['user_login'] = $userInfo['login'];
							$_SESSION['user_id'] = $userInfo['id'];
							header('location: index.php');
						} else {
							$view .= "<p>Такой пользователь не существует, либо неверный пароль.</p>";
							break;
						}
					}
				} else {
					$view .= "<p>Такой пользователь не существует, либо неверный пароль.</p>";
				}
			}
		}


		/**
		 * Регистрация
		 */
		if (!empty($_POST['register'])) {
			if (empty($_POST['login']) or empty($_POST['password'])) {
				$view .= 'Ошибка регистрации. Введите все необхдоимые данные.';
			} else {
				if ($this->model->countLogins($_POST['login']) === 0) {
					if ($this->model->register($_POST['login'], $_POST['password'])) {
						foreach ($this->model->signIn($_POST['login'], $_POST['password']) as $userInfo) {
							$_SESSION['user_login'] = $userInfo['login'];
							$_SESSION['user_id'] = $userInfo['id'];
							header('location: index.php');
						}
					}
				} else {
					$view .= "<p>Такой пользователь уже существует в базе данных.</p>";
				}
			}
		}

		
		$view .= $this->twig->render('auth/auth.twig');
		echo $view;
	}
}