<?php
class Router
{
	private $dirConroller = '';
	private $db = '';
	private $urls = [];
	private $twig;
	function __construct($dirConroller, $db, $twig = null)
	{
		$this->dirConroller = $dirConroller;
		$this->db = $db;
		$this->twig = $twig;
	}
	/**
	 * Добавление роутеров
	 * @param $url урл
	 * @param $controllerAndAction пример: BookController@getUpdate
	 */
	public function get($url, $controllerAndAction, $params = [])
	{
		$this->add('GET', $url, $controllerAndAction, $params);
	}
	/**
	 * Добавление роутеров
	 * @param $url урл
	 * @param $controllerAndAction пример: BookController@postUpdate
	 */
	public function post($url, $controllerAndAction, $params = [])
	{
		$this->add('POST', $url, $controllerAndAction, $params);
	}
	/**
	 * Добавление роутеров
	 * @param $url урл
	 * @param $controllerAndAction пример: BookController@list
	 */
	public function add($method, $url, $controllerAndAction, $params)
	{
		list($controller, $action) = explode('@', $controllerAndAction);
		$this->urls[$method][$url] = [
			'controller' => $controller,
			'action' => $action,
			'params' => $params
		];
	}
	/**
	 * Подключение контроллеров
	 * @param $url текущий урл
	 */
	public function run($currentUrl)
	{
		if (isset($this->urls[$_SERVER['REQUEST_METHOD']])) {
			foreach ($this->urls[$_SERVER['REQUEST_METHOD']] as $url => $urlData) {
				if (preg_match('(^'.$url.'$)', $currentUrl, $matchList)) {
					$params = [];
					foreach ($urlData['params'] as $param => $i) {
						$params[$param] = $matchList[$i];
					}
					include $this->dirConroller.$urlData['controller'].'.php';
					$controller = new $urlData['controller']($this->db, $this->twig);
					if ($_SERVER['REQUEST_METHOD'] == 'POST') {
						$actionMethod = $urlData['action'];
						$controller->$actionMethod($params, $_POST);
					} else {
						$actionMethod = $urlData['action'];
						$controller->$actionMethod($params);
					}
				}
			}
		}
	}
}