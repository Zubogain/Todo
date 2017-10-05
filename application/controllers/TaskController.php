<?php
/**
* controller Task
*/
class TaskController
{
	private $model = null;
	private $twig;

	function __construct($db, $twig)
	{
		include __DIR__ . '/../models/task.php';
		$this->model = new TaskModel($db);
		$this->twig = $twig;
	}


	/**
	 * Показывем список дел и не только :-)
	 */
	public function index()
	{
		$view = '';
		if (!isset($_SESSION['user_login'])) {
			header('Location: /');
			die;
		}


		/**
		 * Запрос на добавление задачи
		 */
		if (isset($_POST['do_task']) and !empty($_POST['new_task'])) {
			$this->model->addTask($_SESSION['user_id'], $_POST['new_task']);
		}


		/**
		 * Запрос на изменение текста задачи
		 */
		if (isset($_POST['do_task']) and isset($_POST['edit_task']) and isset($_POST['id'])) {
			$this->model->editTask($_POST['edit_task'], $_POST['id']);
		}


		/**
		 * Проверка событий выполнить и удалить.
		 */
		if (isset($_GET['/task/action']) and $pie = explode('/', $_GET['/task/action'])) {
			if ((string) $pie[1] == 'done') {
				$this->model->doneTask($pie[0]);
			}


			if ((string) $pie[1] == 'delete') {
				$this->model->deleteTask($pie[0]);
			}
		}


		/**
		 * Переложение ответственности
		 */
		if (!empty($_POST['assign']) and !empty($_POST['assigned_user_id'])) {
			$pie = explode('/', $_POST['assigned_user_id']);
			if (count($pie) == 2) {
				$this->model->assignUser($pie[0], $pie[1]);
			}
		}
		

		$baseTmp = $this->twig->load('task/index.html');
		$params = array(
			'session' => $_SESSION,
			'get' => $_GET,
			'post' => $_POST,
			'todoArray' => $this->model->findAll(),
			'usersArray' => $this->model->selectAllUsers()
		);
		/**
		 * Генерация формы на добавление или изменение в зависимости от события
		 */
		if (isset($_GET['/task/action']) and $pie = explode('/', $_GET['/task/action']) and (string) $pie[1] == 'edit') {
			foreach ($this->model->selectTask($pie[0]) as $value) {
				$params['editDesc'] = array('id' => $value['id'], 'desc' => $value['description']);
				break;
			}
		}


		/**
		 * Показываем весь список задач :)
		 */
		if (!empty($_POST['sort']) and !empty($_POST['sort_by'])) {
			switch ($_POST['sort_by']) {
				case 'is_done':
					$params['todoArray'] = $this->model->sortTaskDone();
					$view .= $baseTmp->render($params);
					break;
				case 'description':
					$params['todoArray'] = $this->model->sortTaskDescription();
					$view .= $baseTmp->render($params);
					break;
				default:
					$params['todoArray'] = $this->model->sortTaskDateAdded();
					$view .= $baseTmp->render($params);
					break;
			}
		} else {
			$view .= $baseTmp->render($params);
		}
		echo $view;
	}
}