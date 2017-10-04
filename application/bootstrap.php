<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
// composer autoloader
require_once __DIR__ . '/../vendor/autoload.php';
// Где лежат шаблоны
$loader = new Twig_Loader_Filesystem(__DIR__ . '/views');
// Где будут хранится файлы кэша (php файлы)
$twig = new Twig_Environment($loader, array( 'debug' => true, 'cache' => __DIR__ . '/tmp/cache',
'auto_reload' => true,
));
// Добовляем возможность dump в twig'e (dump в twig'e аналог var_dump в php)
$twig->addExtension(new Twig_Extension_Debug());
/*
 * Модули якобы ядра :-)
 */
require_once __DIR__ . '/core/db.php';
require_once __DIR__ . '/core/router.php';
/*
 * Конфиг для MySQL
 */
$config = include 'config.php';
$db = DataBase::connect(
	$config['mysql']['host'],
	$config['mysql']['dbname'],
	$config['mysql']['user'],
	$config['mysql']['pass']
);
/*
 * Возможные маршруты
 */
$router = new Router(__DIR__ . '/controllers/', $db, $twig);
require_once __DIR__ . '/routes.php';
/*
 * Удаляем "/?", потому что не сделали настройки на серверах
 */
$currentUrl = str_replace('/?', '', $_SERVER['REQUEST_URI']);
$router->run($currentUrl);